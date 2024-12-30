<?php
function fetchGoogleReviews($placeId, $apiKey) {
    $url = "https://maps.googleapis.com/maps/api/place/details/json?placeid={$placeId}&key={$apiKey}";
    $response = file_get_contents($url);
    $data = json_decode($response, true);
    
    if (isset($data['result']['reviews'])) {
        return $data['result']['reviews'];
    } else {
        return [];
    }
}
?>
<link rel="stylesheet" href="review.css">
    <div class="google-reviews">
    <h2>Google Reviews</h2>
    <div class="reviews-container">
        <?php
        // Fetch reviews from Google
        $placeId = "YOUR_PLACE_ID"; // Your Google place ID
        $apiKey = "YOUR_GOOGLE_API_KEY"; // Your Google API Key
        $reviews = fetchGoogleReviews($placeId, $apiKey);

        if (!empty($reviews)) {
            $totalReviews = count($reviews);
            echo "<p>Total Reviews: {$totalReviews}</p>";
            echo "<div class='top-review'>";
            echo "<h3>Top Review:</h3>";
            echo "<p><strong>" . htmlspecialchars($reviews[0]['author_name']) . "</strong>: " . htmlspecialchars($reviews[0]['text']) . "</p>";
            echo "</div>";

            // Display reviews
            foreach ($reviews as $review) {
                echo "<div class='review'>";
                echo "<strong>" . htmlspecialchars($review['author_name']) . "</strong> - " . $review['rating'] . " stars";
                echo "<p>" . htmlspecialchars($review['text']) . "</p>";
                echo "</div>";
            }
        } else {
            echo "<p>No reviews available.</p>";
        }
        ?>
    </div>

    <div class="leave-review">
        <h3>Leave a Review</h3>
        <p><a href="https://www.google.com/search?q=YOUR_BUSINESS_NAME&rlz=1C1GCEU_enIN832IN832&ei=YOUR_BUSINESS_ID&ved=0ahUKEwjg27z0j9_lAhUMfisKHU9dDfgQ4dUDCAw&uact=5" target="_blank">Click here to leave a Google review</a></p>
    </div>
</div>

