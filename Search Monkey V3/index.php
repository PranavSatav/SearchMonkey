<!DOCTYPE html>
<html lang="en">
<head>
    
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SearchMonkey</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.16/dist/tailwind.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Dosis:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <style>
img[src*="https://cdn.000webhost.com/000webhost/logo/footer-powered-by-000webhost-white2.png"] {display: none;}
#bottom-image {
    position: absolute;
    bottom: 5vh; /* Adjust this value to control the elevation */
}
#top-left-gif {
    position: fixed;
    top: 0px; /* Adjust this value to control the vertical position */
    left: 0px; /* Adjust this value to control the horizontal position */
}

  #query {
    width: 100%;
    border: none;
    padding: 10px;
    background: url('https://i.pinimg.com/originals/a5/de/39/a5de392b257f6c85f23c0a7cc91feb95.gif') center center no-repeat;
    background-size: cover;
    color: white; /* Set text color to be visible on the GIF */
    font-size: 16px;
  }

  .input-overlay {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background-color: rgba(0, 0, 0, 0.5); /* Add a semi-transparent overlay to enhance readability */
  }

.bg-text-container {
  transform: translateX(-50%);
  left: 50%;
  position: absolute;
  z-index: -999;
}

@keyframes text-scrolling {
  0% {
    transform: translate3d(-100%, 0, 0);
  }
  100% {
    transform: translate3d(0%, 0, 0);
  }
}
.animate-text {
  animation: text-scrolling 20s linear infinite;
  will-change: transform;
  display: block;
  position: relative;
  white-space: nowrap;
}
.animate-text.left {
  animation-direction: reverse;
}

span {
  font-size: 280px;
  color: transparent;
  -webkit-text-stroke: 2px #30442a;
  text-transform: uppercase;
  display: inline-block;
  line-height: 0.75;
  min-width: auto;
  font-weight: 800;
}

.container {
  padding: 30px;
  max-width: 1000px;
  width: 100%;
  margin: 0 auto;
}
.container .col {
  max-width: 600px;
  margin: 0;
}

h1 {
  font-size: 90px;
  margin: 0;
}

p {
  font-size: 18px;
  font-weight: 200;
  margin: 0;
}
    body {
            font-family: "Dosis";
            overflow-x: hidden;
  width: 100%;
  height: 100vh;
  display: flex;
  align-items: center;
  background: #1e2134;
        }
        .button-grid {
            display: flex;
            flex-wrap: wrap;
            justify-content: space-between;
            gap: 10px; /* Adjust the value to control the space between buttons */
        }
        
        .search-type {
            flex: 1;
            min-width: 100px; /* Adjust the minimum width as needed */
        }
    </style>
</head>
<body class="flex justify-center items-center min-h-screen bg-gray-100">
    <div class="bg-text-container">
        <div class="animate-text left">
       <span>Search Monkey&nbsp;</span>
      <span>Search Monkey&nbsp;</span>
    </div>
    <div class="animate-text">
      <span>Search Monkey&nbsp;</span>
      <span>Search Monkey&nbsp;</span>
    </div>
    
    <div class="animate-text left">
       <span>Search Monkey&nbsp;</span>
      <span>Search Monkey&nbsp;</span>
    </div>
  </div>
    <div class="w-full max-w-md p-6 bg-white rounded-lg shadow-md" style="background: rgba(255, 255, 255, 0.5); backdrop-filter: blur(10px);">
        
        <img src="https://convenzioni.industriawelfaresalute.it/wp-content/uploads/2017/09/animat-search-color.gif" alt="Peeking Monkey" style="width:150px;" class="mx-auto mb-4">
        <h1 class="text-2xl  font-bold mb-4">Search Monkey V3</h1>

        <form id="search-form" class="mb-4">
            <input type="text" id="query" placeholder="What would you like to search ^_^" class="w-full border rounded px-3 py-2">
            <button type="button" id="search-button" class="mt-2 px-4 py-2 bg-purple-200 text-black rounded hover:bg-white">🔍 Search</button>
            <button type="button" id="reset-button" class="mt-2 ml-2 px-4 py-2 bg-red-500 text-white rounded hover:bg-red-600">Reset</button>
        </form>
<br>
        <h2 class="text-xl text-center font-semibold mb-2">🎲 Search Options 🎲</h2>
        <div class="button-grid mb-4">
    <button class="search-type bg-gray-300 hover:bg-gray-400 text-gray-800 font-semibold py-2 px-4 rounded" data-search-str="+(mkv|mp4|avi|mov|mpg|wmv) -inurl:(jsp|pl|php|html|aspx|htm|cf|shtml) intitle:index.of -inurl:(listen77|mp3raid|mp3toss|mp3drug|index_of|wallywashis)">Movies 🎥</button>
    <button class="search-type bg-gray-300 hover:bg-gray-400 text-gray-800 font-semibold py-2 px-4 rounded" data-search-str="+(exe|iso|tar|rar|zip|apk) -inurl:(jsp|pl|php|html|aspx|htm|cf|shtml) intitle:index.of -inurl:(listen77|mp3raid|mp3toss|mp3drug|index_of|wallywashis)">Apps 🌵</button>
    <button class="search-type bg-gray-300 hover:bg-gray-400 text-gray-800 font-semibold py-2 px-4 rounded" data-search-str="+(mp3|wav|flac|ogg) -inurl:(jsp|pl|php|html|aspx|htm|cf|shtml) intitle:index.of -inurl:(listen77|mp3raid|mp3toss|mp3drug|index_of|wallywashis)">Audio 🎧</button>
    <button class="search-type bg-gray-300 hover:bg-gray-400 text-gray-800 font-semibold py-2 px-4 rounded" data-search-str="+(pdf|doc|docx|ppt|pptx|xls|xlsx) intitle:index.of">Document 🗒️</button>
    <button class="search-type bg-gray-300 hover:bg-gray-400 text-gray-800 font-semibold py-2 px-4 rounded" data-search-str="+(jpg|jpeg|png|gif|bmp|svg) intitle:index.of">Images ✨️</button>
    <button class="search-type bg-gray-300 hover:bg-gray-400 text-gray-800 font-semibold py-2 px-4 rounded" data-search-str="+(mkv|mp4|avi|mov|mpg|wmv|exe|iso|tar|rar|zip|apk|mp3|wav|flac|ogg|pdf|doc|docx|ppt|pptx|xls|xlsx|jpg|jpeg|png|gif|bmp|svg) -inurl:(jsp|pl|php|html|aspx|htm|cf|shtml) intitle:index.of -inurl:(listen77|mp3raid|mp3toss|mp3drug|index_of|wallywashis)">All Files 🔥️</button>
    <button class="search-type bg-gray-300 hover:bg-gray-400 text-gray-800 font-semibold py-2 px-4 rounded" data-search-str="site:drive.google.com">Google Drive Links 💽</button>
</div>

        <div id="selected-search" class="text-sm mt-4"></div>
        <div id="search-results" class="mt-4"></div>
    </div>

   <script>
        const searchButtons = document.querySelectorAll('.search-type');
        const queryInput = document.getElementById('query');
        const searchForm = document.getElementById('search-form');
        const selectedSearch = document.getElementById('selected-search');
        const searchResults = document.getElementById('search-results');
        const searchButton = document.getElementById('search-button');
        const resetButton = document.getElementById('reset-button');

        let selectedType = null;

        searchButtons.forEach(button => {
            button.addEventListener('click', () => {
                selectedType = button.getAttribute('data-search-str');
                selectedSearch.textContent = `Currently selected: ${button.textContent}`;
                searchResults.textContent = ''; // Clear any previous error messages
            });
        });

        function displayError(message) {
            searchResults.textContent = message;
        }

        function performSearch() {
            const query = queryInput.value.trim();
            
            if (query === '') {
                displayError("Search box is empty.");
            } else if (!selectedType) {
                displayError("You forgot to select a search option.");
            } else {
                const searchQuery = query;
                const combinedSearchStr = `${searchQuery} ${selectedType}`;
                const encodedCombinedSearchStr = encodeURIComponent(combinedSearchStr);
                const googleSearchURL = `https://www.google.com/search?q=${encodedCombinedSearchStr}`;
                window.open(googleSearchURL, '_blank');
            }
        }

        searchForm.addEventListener('submit', (event) => {
            event.preventDefault();
            performSearch();
        });

        searchButton.addEventListener('click', () => {
            performSearch();
        });

        queryInput.addEventListener('input', () => {
            searchResults.textContent = ''; // Clear error message when the user types
        });

        resetButton.addEventListener('click', () => {
            queryInput.value = '';
            selectedType = null;
            selectedSearch.textContent = '';
            searchResults.textContent = '';
        });
    </script>
    <script>
        
/* Set width of all animated text to match container */
let parent = document.querySelectorAll('.animate-text');
for(let i = 0; i < parent.length; i++) {
  parent[i].style.width = parent[i].children[0].clientWidth + "px"; 
};
    </script>
    
    <div id="bottom-image">
    <img src="https://i.imgur.com/UDWASLL.png" alt="Bottom Center Image">
</div>

<div id="top-left-gif">
    <img src="https://i.imgur.com/j4ds8Ub.gif" alt="Top Right GIF">
</div>

</body>
</html>
