<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Post with Comments</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
        }
        .post, .comment {
            border: 1px solid #ccc;
            padding: 10px;
            margin-bottom: 10px;
        }
        .comment {
            margin-left: 20px;
        }
        .comment-form {
            margin-top: 20px;
        }
    </style>
</head>
<body>

    <!-- Post Section -->
    <div class="post">
        <h2>Post Title</h2>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin a orci nec est tristique bibendum.</p>
        <div class="comments-section">
            <h3>Comments</h3>
            
            <!-- Existing Comments -->
            <div class="comment">
                <p><strong>User1:</strong> Great post! Very informative.</p>
            </div>
            <div class="comment">
                <p><strong>User2:</strong> I found this really helpful. Thanks for sharing!</p>
            </div>
            
            <!-- Comment Form -->
            <div class="comment-form">
                <h4>Add a Comment</h4>
                <form action="/add_comment" method="post">
                    <textarea name="comment" rows="4" cols="50" placeholder="Your comment here..."></textarea><br>
                    <input type="text" name="username" placeholder="Your name"><br>
                    <button type="submit">Submit</button>
                </form>
            </div>
        </div>
    </div>

</body>
</html>
