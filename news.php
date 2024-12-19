<?php include 'header.php' ?>
<style>
    .card-container {
        display: flex;
        gap: 20px;
        justify-content: center;
        flex-wrap: wrap;
    }

    .card {
        background: #f8f9fa;
        padding: 15px;
        border: 1px solid #ddd;
        border-radius: 10px;
        max-width: 300px;
        text-align: center;
    }

    .card img {
        width: 100%;
        height: auto;
        border-radius: 8px;
    }

    .news-details {
        margin: 10px 0;
        font-size: 14px;
    }

    .news-date,
    .news-topic {
        margin-bottom: 5px;
        color: #555;
        font-weight: bold;
    }
</style>
<div class="bradcam_area">
    <div class="single_bradcam d-flex align-items-center overlay" style="background-image: url(./img/header-news.png);">
        <div class="container">
            <div class="row align-items-center justify-content-center">
                <div class="col-xl-12">
                    <div class="bradcam_text text-center">
                        <h3>NEWS</h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<footer class="footer">
    <div class="footer_top">
        <div class="row justify-content-center">
            <div class="col-lg-8 col-md-8">
                <div class="footer_widget">
                    <div class="address_details text-center">
                        <!-- News and Updates Section -->
                        <h4 style="text-align:center;">News and Updates</h4>
                        <p class="text-center">Stay updated with the latest announcements and news</p>

                        <div class="card-container">
                            <!-- News Item 1 -->
                            <div class="card">
                                <img src="img/news_1.jpg.webp" alt="Keynote Speaker">
                                <h4 style="text-align:center;">Keynote Speaker Announced</h4>
                                <div class="news-details">
                                    <div class="news-date"><strong>Date:</strong> December 1, 2024</div>
                                    <div class="news-topic"><strong>Topic:</strong> Keynote Address</div>
                                    <ul>
                                        <li>Dr. Ali Sorayyaei Azar will deliver the keynote address.</li>
                                    </ul>
                                </div>
                                <a href="speaker.php">Read more</a>
                            </div>



                            <!-- News Item 3 -->
                            <div class="card">
                                <img src="img/news_3.jpg.webp" alt="Call for Papers">
                                <h4 style="text-align:center;">Call for Papers</h4>
                                <div class="news-details">
                                    <div class="news-date"><strong>Date:</strong> December 2, 2024</div>
                                    <div class="news-topic"><strong>Topic:</strong> Paper Submission</div>
                                    <ul>
                                        <li>Submit your abstracts by January 15, 2025, to participate in the conference.
                                        </li>
                                    </ul>
                                </div>
                                <a href="register.php">Submit Paper Now</a>
                            </div>

                            <!-- News Item: Important Dates for ICEPHSS’25 -->
                            <div class="card">
                                <img src="img/news_important_dates.jpg" alt="Important Dates">
                                <h4 style="text-align:center;">Important Dates for ICEPHSS’25 Announced</h4>
                                <div class="news-details">
                                    <div class="news-date"><strong>Date:</strong> December 2, 2024</div>
                                    <div class="news-topic"><strong>Topic:</strong> Conference Schedule</div>
                                    <ul>
                                        <li><strong>10.01.2025:</strong> Abstract Submission Deadline</li>
                                        <li><strong>22.01.2025:</strong> Acceptance Notification</li>
                                        <li><strong>25.01.2025:</strong> Last Date of Registration</li>
                                        <li><strong>10.02.2025:</strong> Full Paper Submission Deadline</li>
                                        <li><strong>20-21.02.2025:</strong> Conference Dates</li>
                                    </ul>
                                </div>
                                <a href="calendar.php">View Full Schedule</a>
                            </div>

                        </div>
                    </div>
                    <!-- End of News and Updates Section -->
                </div>
            </div>
        </div>
    </div>
    <br><br><br><br><br><br><br>
</footer>

<?php include 'footer.php' ?>