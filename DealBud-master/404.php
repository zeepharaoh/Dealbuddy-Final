<?php
get_header();
?>
    <style>
        .error-message {
            display: flex;
            flex-direction: column;
            text-align: center;
            padding: 20px;
        }

        .four-oh-four {
            height: 70vh;
            display: flex;
            justify-content: center;
            align-items: center;
        }
    </style>
<div class="container">

    <section class="four-oh-four">
        <div class="error-message">
            <div>
                <h1 class="section-header">Content Not Found</h1>
                <p class="error-message_text">We're sorry... <br> The content you're looking for does not exist, or is not available at the moment.</p>
            </div>
        </div>
    </section>
</div>
<?php
get_footer();
?>