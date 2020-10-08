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
    <script>
    $(document).ready(function() {

        $('button').on('click', function(e) {
            e.preventDefault();
            console.log('I want to remove this');
            $('#mainSearch').focus();
        });

        // 새로운 라인 추가
        // 신규라인 더 추가

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