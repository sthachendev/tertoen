<head>
    <link rel="stylesheet" href="./css/post.css">
    <style>
      .post-details {
        margin: 20px;
        padding: 20px;
        border: 1px solid #ccc;
        border-radius: 5px;
        background-color: #f9f9f9;
        box-shadow: 0 0 5px rgba(0, 0, 0, 0.2);
        margin: 3% 20% 5% 20%;
      }
  
      .post-details h2 {
        color: #333;
      }
  
      .post-image img {
        max-width: 30%;
        height: auto;
        border: 1px solid #ddd;
        border-radius: 5px;
        margin: 10px 0;
      }
  
      .post-description {
        line-height: 1.5;
      }
  
      a {
        text-decoration: none;
        color: #0074d9;
      }
    </style>
  </head>
  <div class="post-details">
      <h2><%= post.title %></h2>
      <p class="post-date">
      dasate///
      </p>
      <div class="post-image" style="display: flex; justify-content: center;">
        <img src="<%= post.imageUrl %>" alt="Post Image">
      </div>
      <div class="post-description">
        <% 
          // Split the description into sentences
          const sentences = post.description.split('. ');
    
          // Loop through each sentence and create a <p> tag for it
          sentences.forEach(sentence => {
        %>
          <p style="text-align:justify; padding: 0 10px 0 10px;"><%= sentence %>.</p>
        <%
          });
        %>
      </div>
      <a href="/news-events">Back to Posts</a>
    </div>
  