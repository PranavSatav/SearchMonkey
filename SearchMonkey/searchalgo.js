 function setFiletype(fileType, buttonData, glyph){
        var defaultString = 'Search anything';
        if (fileType==-1) {
            fileType="";
        }
        switch(glyph) {
            case 'film':
                $("#query").prop('placeholder',defaultString+' eg. Lost s01');
                break;
            case 'music':
                $("#query").prop('placeholder',defaultString+' eg. Eminem discography');
                break;
            case 'book':
                $("#query").prop('placeholder',defaultString+' eg. Alice in Wonderland');
                break;
            case 'desktop':
                $("#query").prop('placeholder',defaultString+' eg. Counter Strike');
                break;
            case 'image':
                $("#query").prop('placeholder',defaultString+' eg. Megan Fox');
                break;
            case 'asterisk':
                $("#query").prop('placeholder',defaultString);
                break;
        }
        $("#fileType").prop('value',fileType);
        $("#ddbutton").html('<span class="fa fa-'+glyph+'" aria-hidden="true"></span><span class="caret"></span>');
        var eventActionEle = document.getElementById('eventAction');
        eventActionEle.value = buttonData;
        $("#query").focus();
        
    }
    function searchGoogle () {
        var query = document.getElementById('query').value;
        var fileType = document.getElementById('fileType').value;
        var eventActionValue = document.getElementById('eventAction').value;
        if (fileType=="") {
            var finalQuery = query+" -inurl:(jsp|pl|php|html|aspx|htm|cf|shtml) intitle:index.of -inurl:(listen77|mp3raid|mp3toss|mp3drug|index_of|wallywashis)";
            eventActionValue = 'Other';
        } else {
            var finalQuery = query+" +("+fileType+") -inurl:(jsp|pl|php|html|aspx|htm|cf|shtml) intitle:index.of -inurl:(listen77|mp3raid|mp3toss|mp3drug|index_of|wallywashis)";
        }
        var url = "https://www.google.com/search?q="+encodeURIComponent(finalQuery);
        console.log(url);
        window.open(url, '_blank');
        $.post( "https://www.filechef.com/search_log", $( "#searchForm" ).serialize());
        ga('send', {
            hitType: 'event',
            eventCategory: 'Search',
            eventAction: eventActionValue,
            eventLabel: query
        });
    }
    function openDropdown(){
        $('#query').focus();
    }

    function searchDrive () {
        var query = document.getElementById('query').value;
        var fileType = document.getElementById('type').value;
        if (fileType=="" || fileType=="all") {
            var finalQuery = query+" site:drive.google.com";
        } else {
            var finalQuery = query+" site:drive.google.com +\"drive/folders\"";
        }
        var url = "https://www.google.com/search?q="+encodeURIComponent(finalQuery);
        console.log(url);
        window.open(url, '_blank');
        ga('send', {
            hitType: 'event',
            eventCategory: 'GDrive Search',
            eventAction: eventActionValue,
            eventLabel: query
        });
    }
    
    function setGDriveFiletype(buttonData, glyph){
        switch(glyph) {
            case 'book':
                filetype = "folder";
                break;
            case 'asterisk':
                filetype = "all";
                break;
        }
        $("#type").prop('value', filetype);
        $("#ddbutton").html('<span class="fa fa-'+glyph+'" aria-hidden="true"></span> '+buttonData+' <span class="caret"></span>');
    }

    function explore () {
        var query = document.getElementById('query').value;
        var finalQuery = query+" site:drive.google.com";
        var url = "https://www.google.com/search?q="+encodeURIComponent(finalQuery);
        console.log(url);
        window.open(url, '_blank');
        ga('send', {
            hitType: 'event',
            eventCategory: 'GDrive Search',
            eventAction: eventActionValue,
            eventLabel: query
        });
    }

    $('#query').keydown(function (e) {
        if (e.keyCode == 13) {
            e.preventDefault();
            searchGoogle();            
            return false;
        }
    });