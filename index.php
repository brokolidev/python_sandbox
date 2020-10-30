<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jquery Test</title>
    <style>
    input:focus,
    input.has-focus {
        border: green;
        color: black;
    }
    </style>
</head>

<body>
    <div>
        <div>
            <p>Test</p>
        </div>
        <form id="searchForm" name="searchForm">
            <input id="mainSearch" type="search" placeholder="검색어 입력">
            <button type="button" class="btn-search jsDoSearch">검색하기</button>
        </form>
        <a href="#" id="invisibleBtn">Click</a>
    </div>
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/jquery.backDetect.min.js"></script>
    <script>
    $(window).load(function() {
        $('body').backDetect(function() {
            // Callback function
            alert("Look forward to the future, not the past!");
        });
    });
    $(function() {

        // if (window.history && window.history.pushState) {
        //     window.history.pushState('', null, './');
        //     $(window).on('popstate', function() {
        //         alert('Back button was pressed.');
        //         // document.location.href = '/submit';
        //     });
        // }

        // $('button').on('click', function(e) {
        //     e.preventDefault();
        //     console.log('clicked');
        //     $('#mainSearch').focus();
        // });

        // $('#invisibleBtn').on('click', function(e) {
        //     e.preventDefault();
        //     $('#mainSearch').focus();
        //     console.log('clicked!!');
        // });

        // $('#invisibleBtn').trigger('click');

        // $('#mainSearch').click();
        // document.getElementById('searchForm').focus();
    });
    </script>
</body>

</html>