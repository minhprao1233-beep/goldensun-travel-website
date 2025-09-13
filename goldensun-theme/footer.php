<footer class="bg-gray-800 text-white">
    <div class="container mx-auto py-8 px-6 text-center">
        <p>&copy; <?php echo date('Y'); ?> Golden Sun Travel. All Rights Reserved.</p>
        <p>Kiến tạo hành trình, gắn kết yêu thương.</p>
    </div>
</footer>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        const mobileMenuButton = document.getElementById('mobile-menu-button');
        const mobileMenu = document.getElementById('mobile-menu');

        mobileMenuButton.addEventListener('click', function() {
            mobileMenu.classList.toggle('hidden');
        });

        const form = document.getElementById('itinerary-form');
        const aiResponseContainer = document.getElementById('ai-response');
        const loadingSpinner = document.getElementById('loading-spinner');

        form.addEventListener('submit', async function(event) {
            event.preventDefault();
            
            const destination = document.getElementById('destination').value;
            const duration = document.getElementById('duration').value;
            const interests = document.getElementById('interests').value;

            // Simple validation
            if (!destination || !duration || !interests) {
                aiResponseContainer.innerHTML = '<p class="text-red-600">Vui lòng điền đầy đủ thông tin vào tất cả các trường.</p>';
                return;
            }

            aiResponseContainer.innerHTML = '';
            loadingSpinner.style.display = 'block';

            // IMPORTANT: Replace with the actual Gemini API endpoint and key if needed
            // For this version, we assume it's set up in a serverless function or similar
            const apiKey = ""; // API key should be handled securely, not exposed here.
            const apiUrl = `https://generativelanguage.googleapis.com/v1beta/models/gemini-2.5-flash-preview-05-20:generateContent?key=${apiKey}`;

            const userPrompt = `Hãy đóng vai một chuyên gia tư vấn du lịch của Golden Sun Travel. Tạo một lịch trình du lịch chi tiết cho một gia đình.
    - Điểm đến: ${destination}
    - Thời gian: ${duration} ngày
    - Sở thích và yêu cầu: ${interests}
    
    Yêu cầu về định dạng:
    - Sử dụng Markdown.
    - Bắt đầu với một tiêu đề hấp dẫn cho chuyến đi.
    - Chia lịch trình theo từng ngày (ví dụ: "Ngày 1: Khám phá...", "Ngày 2: Vui chơi...").
    - Trong mỗi ngày, đề xuất các hoạt động buổi sáng, trưa, chiều, tối.
    - Đưa ra gợi ý về các món ăn đặc sản và nhà hàng địa phương phù hợp cho gia đình.
    - Thêm một mục "Mẹo nhỏ từ Golden Sun" ở cuối cùng với những lời khuyên hữu ích (ví dụ: đồ cần mang, cách di chuyển...).
    - Giọng văn phải thân thiện, chuyên nghiệp và đầy cảm hứng.`;

            try {
                const response = await fetch(apiUrl, {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/json',
                    },
                    body: JSON.stringify({
                        contents: [{
                            parts: [{
                                text: userPrompt
                            }]
                        }]
                    })
                });

                if (!response.ok) {
                    throw new Error(`API call failed with status: ${response.status}`);
                }

                const result = await response.json();
                
                let itineraryText = "Rất tiếc, đã có lỗi xảy ra. Vui lòng thử lại.";
                if (result.candidates && result.candidates[0].content && result.candidates[0].content.parts[0].text) {
                     itineraryText = result.candidates[0].content.parts[0].text;
                }
                
                // Simple Markdown to HTML conversion
                let htmlResponse = itineraryText
                    .replace(/^### (.*$)/gim, '<h3 class="text-xl font-bold text-brand-teal mt-6 mb-2">$1</h3>')
                    .replace(/^## (.*$)/gim, '<h2 class="text-2xl font-bold text-brand-teal mt-8 mb-4">$1</h2>')
                    .replace(/^# (.*$)/gim, '<h1 class="text-3xl font-bold text-brand-teal mt-8 mb-4">$1</h1>')
                    .replace(/\*\*(.*?)\*\*/g, '<strong>$1</strong>')
                    .replace(/\* (.*?)(?=\n\* |$)/g, '<li class="ml-5 list-disc">$1</li>') // Basic list item
                    .replace(/\n/g, '<br>');

                aiResponseContainer.innerHTML = htmlResponse;

            } catch (error) {
                console.error('Error calling Gemini API:', error);
                aiResponseContainer.innerHTML = `<p class="text-red-600">Đã có lỗi xảy ra khi kết nối với Trợ lý AI. Vui lòng kiểm tra lại thông tin hoặc thử lại sau. Lỗi: ${error.message}</p>`;
            } finally {
                loadingSpinner.style.display = 'none';
            }
        });
    });
</script>

<?php wp_footer(); ?>
</body>
</html>
