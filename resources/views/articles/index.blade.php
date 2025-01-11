<x-app-layout>
    {{-- <div class="slideshow-container">
        <div class="slides">
            <!-- Slide 1 -->
            <div class="slide">
                <img src="https://scitechdaily.com/images/Artificial-Intelligence-Robot-Thinking-Brain.jpg" alt="Artificial Intelligence">
                <div class="slide-info">
                    <h2>Artificial Intelligence Article</h2>
                    <p>Published on: May 15, 2023 | By John Doe</p>
                    <p>This is a short description for the AI article...</p>
                    <a href="/articles/1" class="read-article-button">Read Article</a>
                </div>
            </div>
            <!-- Slide 2 -->
            <div class="slide">
                <img src="https://www.eetasia.com/wp-content/uploads/sites/2/2022/05/iot-devices_cover.jpg" alt="IOT">
                <div class="slide-info">
                    <h2>IOT Article</h2>
                    <p>Published on: May 16, 2023 | By Jane Doe</p>
                    <p>This is a short description for the IoT article...</p>
                    <a href="/articles/2" class="read-article-button">Read Article</a>
                </div>
            </div>
            <!-- Slide 3 -->
            <div class="slide">
                <img src="https://eu-images.contentstack.com/v3/assets/blt69509c9116440be8/bltdda25924b7cde5a0/664e5d39f5c320a4510b1767/cybersecurity_lumerb-AlamyStockPhoto.jpg?disable=upscale&width=1200&height=630&fit=crop" alt="Cybersecurity">
                <div class="slide-info">
                    <h2>Cybersecurity Article</h2>
                    <p>Published on: May 17, 2023 | By Alice Smith</p>
                    <p>This is a short description for the Cybersecurity article...</p>
                    <a href="/articles/3" class="read-article-button">Read Article</a>
                </div>
            </div>
        </div>
        <!-- Navigation -->
        <div class="arrow left" onclick="prevSlide()">&#10094;</div>
        <div class="arrow right" onclick="nextSlide()">&#10095;</div>
    </div> --}}

    {{-- {{ $articles }} --}}

    <x-slider.slider>
        @foreach ($articles as $article)
            <x-slider.item 
            :title="$article->title" 
            :content="$article->content" 
            :image="$article->image" 
            :publication_date="$article->publication_date" 
            :author="$article->author->name"
            :url="'/articles/' . $article->id" />
        @endforeach
    </x-slider.slider>

    {{-- <div class="articles-layout">
        <!-- Featured Article -->
        <div class="featured-article">
            <img src="https://ischoolonline.berkeley.edu/wp-content/uploads/sites/37/2021/01/4430_whatismachinelearning_hero.jpg"
                alt="ML">
            <div class="featured-info">
                <h2>Machine learning Article</h2>
                <p>Published on: May 17, 2023 | By Mark Bonn</p>
                <p>Highlight of the featured article goes here...</p>
                <a href="/articles/featured" class="read-article-button">Read Article</a>
            </div>
        </div>

        <!-- Small Articles -->
        <div class="small-articles">
            <div class="small-article">
                <img src="https://assets.new.siemens.com/siemens/assets/api/uuid:cfa16190-9fdc-487a-a94f-d37aacdcd367/width:2224/quality:high/simatic-rtls-robotics-1-926846266.jpg"
                    alt="Small Article 1">
                <h3>Robotics Article 1</h3>
                <p>Short description...</p>
                <a href="/articles/4" class="read-article-button">Read Article</a>
            </div>
            <div class="small-article">
                <img src="https://src.n-ix.com/uploads/2024/08/29/1b2cf562-e226-440f-9f8f-b2f827471c6e.webp"
                    alt="Small Article 2">
                <h3>Robotics in healthcare: A comprehensive overview</h3>
                <p>Short description...</p>
                <a href="/articles/5" class="read-article-button">Read Article</a>
            </div>
            <div class="small-article">
                <img src="https://static01.nyt.com/images/2025/01/09/multimedia/ROOSE-meta-store-hfpm/ROOSE-meta-store-hfpm-superJumbo.jpg?quality=75&auto=webp"
                    alt="Small Article 3">
                <h3>What’s Behind Meta’s MAGA Makeover?</h3>
                <p>Short description...</p>
                <a href="/articles/6" class="read-article-button">Read Article</a>
            </div>
        </div>
    </div>
    <script src="{{ asset('js/articles.js') }}"></script> --}}
</x-app-layout>
