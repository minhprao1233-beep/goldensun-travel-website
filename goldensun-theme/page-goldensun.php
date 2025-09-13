<?php
/*
Template Name: Golden Sun Travel Page
*/

get_header();
?>

<main>
    <!-- Hero Section -->
    <section id="hero" class="bg-cover bg-center h-[60vh] md:h-[80vh] flex items-center text-white" style="background-image: url('https://images.unsplash.com/photo-1501785888041-af3ef285b470?q=80&w=2070&auto=format&fit=crop');">
        <div class="bg-black bg-opacity-40 absolute inset-0"></div>
        <div class="container mx-auto px-6 text-center relative">
            <h1 class="text-4xl md:text-6xl font-bold leading-tight mb-4 animate-fade-in-down">Kiến Tạo Kỷ Niệm Gia Đình Vô Giá</h1>
            <p class="text-lg md:text-2xl mb-8 animate-fade-in-up">Golden Sun Travel đồng hành cùng bạn trên mọi hành trình.</p>
            <a href="#ai-planner" class="bg-amber-500 hover:bg-amber-600 text-white font-bold py-3 px-8 rounded-full text-lg transition duration-300 transform hover:scale-105">Lên Kế Hoạch Với AI</a>
        </div>
    </section>

    <!-- Features Section -->
    <section id="features" class="py-16 md:py-24 bg-white">
        <div class="container mx-auto px-6 text-center">
            <h2 class="section-title text-brand-teal mb-12">Tại Sao Chọn Golden Sun Travel?</h2>
            <div class="grid md:grid-cols-3 gap-10">
                <div class="p-8 shadow-lg rounded-xl bg-gray-50 transition duration-300 hover:shadow-xl hover:-translate-y-2">
                    <div class="text-amber-500 mb-4">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-16 w-16 mx-auto" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                        </svg>
                    </div>
                    <h3 class="text-2xl font-bold mb-3 text-brand-dark-blue">Trải nghiệm Độc Quyền</h3>
                    <p>Chúng tôi tạo ra những lịch trình độc đáo, không chỉ là du lịch mà là hành trình khám phá và gắn kết.</p>
                </div>
                <div class="p-8 shadow-lg rounded-xl bg-gray-50 transition duration-300 hover:shadow-xl hover:-translate-y-2">
                    <div class="text-amber-500 mb-4">
                         <svg xmlns="http://www.w3.org/2000/svg" class="h-16 w-16 mx-auto" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1">
                          <path stroke-linecap="round" stroke-linejoin="round" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z" />
                        </svg>
                    </div>
                    <h3 class="text-2xl font-bold mb-3 text-brand-dark-blue">Ưu Tiên Gia Đình</h3>
                    <p>Mọi hoạt động đều được thiết kế để phù hợp với mọi lứa tuổi, đảm bảo niềm vui cho cả gia đình.</p>
                </div>
                <div class="p-8 shadow-lg rounded-xl bg-gray-50 transition duration-300 hover:shadow-xl hover:-translate-y-2">
                    <div class="text-amber-500 mb-4">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-16 w-16 mx-auto" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1">
                          <path stroke-linecap="round" stroke-linejoin="round" d="M21 12a9 9 0 01-9 9m9-9a9 9 0 00-9-9m9 9H3m9 9a9 9 0 01-9-9m9 9V3m0 18a9 9 0 009-9m-9 9a9 9 0 00-9-9" />
                        </svg>
                    </div>
                    <h3 class="text-2xl font-bold mb-3 text-brand-dark-blue">Hỗ Trợ Tận Tâm</h3>
                    <p>Đội ngũ chuyên gia luôn sẵn sàng hỗ trợ 24/7, đảm bảo chuyến đi của bạn diễn ra suôn sẻ và an toàn.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- AI Planner Section -->
    <section id="ai-planner" class="py-16 md:py-24 bg-brand-light-cream">
        <div class="container mx-auto px-6">
            <div class="text-center mb-12">
                <h2 class="section-title text-brand-teal">Trợ Lý AI Lên Lịch Trình</h2>
                <p class="text-lg mt-4 max-w-3xl mx-auto">Chỉ cần nhập điểm đến, số ngày và sở thích của gia đình bạn, Trợ lý AI của chúng tôi sẽ tạo ra một lịch trình hoàn hảo chỉ trong vài giây!</p>
            </div>
            <div class="max-w-4xl mx-auto bg-white p-8 rounded-2xl shadow-2xl">
                <form id="itinerary-form">
                    <div class="grid md:grid-cols-2 gap-6 mb-6">
                        <div>
                            <label for="destination" class="block text-gray-700 font-bold mb-2">Điểm đến mơ ước?</label>
                            <input type="text" id="destination" name="destination" class="w-full p-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-amber-500" placeholder="Ví dụ: Đà Nẵng, Phú Quốc..." required>
                        </div>
                        <div>
                            <label for="duration" class="block text-gray-700 font-bold mb-2">Bạn đi trong bao lâu (ngày)?</label>
                            <input type="number" id="duration" name="duration" class="w-full p-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-amber-500" placeholder="Ví dụ: 3" min="1" required>
                        </div>
                    </div>
                    <div class="mb-6">
                        <label for="interests" class="block text-gray-700 font-bold mb-2">Sở thích của gia đình bạn là gì?</label>
                        <textarea id="interests" name="interests" rows="4" class="w-full p-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-amber-500" placeholder="Ví dụ: tắm biển, khám phá ẩm thực, tham quan di tích lịch sử, các hoạt động cho trẻ em..." required></textarea>
                    </div>
                    <div class="text-center">
                        <button type="submit" class="bg-amber-500 hover:bg-amber-600 text-white font-bold py-3 px-10 rounded-full text-lg transition duration-300 transform hover:scale-105">Tạo Lịch Trình Ngay!</button>
                    </div>
                </form>
                <div id="loading-spinner" class="mt-8 text-center" style="display: none;">
                    <svg class="animate-spin h-10 w-10 text-amber-500 mx-auto" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                        <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle>
                        <path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z"></path>
                      </svg>
                      <p class="mt-2 text-gray-600">Trợ lý AI đang sáng tạo lịch trình... Vui lòng chờ trong giây lát.</p>
                </div>
                <div id="ai-response" class="mt-8 p-6 bg-gray-50 rounded-lg prose max-w-none">
                    <!-- AI response will be injected here -->
                </div>
            </div>
        </div>
    </section>

    <!-- Testimonials Section -->
    <section id="testimonials" class="py-16 md:py-24 bg-white">
        <div class="container mx-auto px-6">
            <h2 class="section-title text-center text-brand-teal mb-12">Khách Hàng Nói Về Chúng Tôi</h2>
            <div class="grid md:grid-cols-2 gap-10 max-w-5xl mx-auto">
                <div class="bg-brand-light-cream p-8 rounded-xl shadow-md">
                    <p class="text-gray-600 mb-4">"Chuyến đi Phú Quốc thật tuyệt vời! Golden Sun đã lo liệu mọi thứ một cách hoàn hảo, từ vé máy bay đến các hoạt động vui chơi. Bọn trẻ nhà mình rất thích. Chắc chắn sẽ chọn Golden Sun cho những chuyến đi tiếp theo!"</p>
                    <div class="font-bold text-brand-dark-blue">- Gia đình anh Minh, Hà Nội</div>
                </div>
                <div class="bg-brand-light-cream p-8 rounded-xl shadow-md">
                    <p class="text-gray-600 mb-4">"Lần đầu tiên cả nhà đi du lịch nước ngoài, chúng tôi khá lo lắng. Nhưng nhờ có Golden Sun, chuyến đi đến Thái Lan đã trở thành một kỷ niệm không thể nào quên. Hướng dẫn viên rất nhiệt tình và am hiểu."</p>
                    <div class="font-bold text-brand-dark-blue">- Gia đình chị Lan, TP.HCM</div>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section id="contact" class="py-16 md:py-24 bg-brand-teal text-white">
        <div class="container mx-auto px-6 text-center">
            <h2 class="text-4xl font-bold mb-4">Sẵn Sàng Cho Chuyến Đi Kế Tiếp?</h2>
            <p class="text-lg mb-8 max-w-2xl mx-auto">Hãy để Golden Sun Travel giúp bạn biến những dự định thành hiện thực. Liên hệ với chúng tôi ngay hôm nay để nhận được tư vấn miễn phí!</p>
            <a href="tel:0909123456" class="bg-white text-brand-teal font-bold py-3 px-8 rounded-full text-lg transition duration-300 transform hover:scale-105 hover:bg-gray-100">Gọi Ngay: 0909.123.456</a>
        </div>
    </section>
</main>

<?php
get_footer();
?>
