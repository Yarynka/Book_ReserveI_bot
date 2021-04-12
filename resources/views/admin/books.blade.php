<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Books Reserve</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- Styles -->
    <style>
        /*! normalize.css v8.0.1 | MIT License | github.com/necolas/normalize.css */html{line-height:1.15;-webkit-text-size-adjust:100%}body{margin:0}a{background-color:transparent}[hidden]{display:none}html{font-family:system-ui,-apple-system,BlinkMacSystemFont,Segoe UI,Roboto,Helvetica Neue,Arial,Noto Sans,sans-serif,Apple Color Emoji,Segoe UI Emoji,Segoe UI Symbol,Noto Color Emoji;line-height:1.5}*,:after,:before{box-sizing:border-box;border:0 solid #e2e8f0}a{color:inherit;text-decoration:inherit}svg,video{display:block;vertical-align:middle}video{max-width:100%;height:auto}.bg-white{--bg-opacity:1;background-color:#fff;background-color:rgba(255,255,255,var(--bg-opacity))}.bg-gray-100{--bg-opacity:1;background-color:#f7fafc;background-color:rgba(247,250,252,var(--bg-opacity))}.border-gray-200{--border-opacity:1;border-color:#edf2f7;border-color:rgba(237,242,247,var(--border-opacity))}.border-t{border-top-width:1px}.flex{display:flex}.grid{display:grid}.hidden{display:none}.items-center{align-items:center}.justify-center{justify-content:center}.font-semibold{font-weight:600}.h-5{height:1.25rem}.h-8{height:2rem}.h-16{height:4rem}.text-sm{font-size:.875rem}.text-lg{font-size:1.125rem}.leading-7{line-height:1.75rem}.mx-auto{margin-left:auto;margin-right:auto}.ml-1{margin-left:.25rem}.mt-2{margin-top:.5rem}.mr-2{margin-right:.5rem}.ml-2{margin-left:.5rem}.mt-4{margin-top:1rem}.ml-4{margin-left:1rem}.mt-8{margin-top:2rem}.ml-12{margin-left:3rem}.-mt-px{margin-top:-1px}.max-w-6xl{max-width:72rem}.min-h-screen{min-height:100vh}.overflow-hidden{overflow:hidden}.p-6{padding:1.5rem}.py-4{padding-top:1rem;padding-bottom:1rem}.px-6{padding-left:1.5rem;padding-right:1.5rem}.pt-8{padding-top:2rem}.fixed{position:fixed}.relative{position:relative}.top-0{top:0}.right-0{right:0}.shadow{box-shadow:0 1px 3px 0 rgba(0,0,0,.1),0 1px 2px 0 rgba(0,0,0,.06)}.text-center{text-align:center}.text-gray-200{--text-opacity:1;color:#edf2f7;color:rgba(237,242,247,var(--text-opacity))}.text-gray-300{--text-opacity:1;color:#e2e8f0;color:rgba(226,232,240,var(--text-opacity))}.text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}.text-gray-500{--text-opacity:1;color:#a0aec0;color:rgba(160,174,192,var(--text-opacity))}.text-gray-600{--text-opacity:1;color:#718096;color:rgba(113,128,150,var(--text-opacity))}.text-gray-700{--text-opacity:1;color:#4a5568;color:rgba(74,85,104,var(--text-opacity))}.text-gray-900{--text-opacity:1;color:#1a202c;color:rgba(26,32,44,var(--text-opacity))}.underline{text-decoration:underline}.antialiased{-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.w-5{width:1.25rem}.w-8{width:2rem}.w-auto{width:auto}.grid-cols-1{grid-template-columns:repeat(1,minmax(0,1fr))}@media (min-width:640px){.sm\:rounded-lg{border-radius:.5rem}.sm\:block{display:block}.sm\:items-center{align-items:center}.sm\:justify-start{justify-content:flex-start}.sm\:justify-between{justify-content:space-between}.sm\:h-20{height:5rem}.sm\:ml-0{margin-left:0}.sm\:px-6{padding-left:1.5rem;padding-right:1.5rem}.sm\:pt-0{padding-top:0}.sm\:text-left{text-align:left}.sm\:text-right{text-align:right}}@media (min-width:768px){.md\:border-t-0{border-top-width:0}.md\:border-l{border-left-width:1px}.md\:grid-cols-2{grid-template-columns:repeat(2,minmax(0,1fr))}}@media (min-width:1024px){.lg\:px-8{padding-left:2rem;padding-right:2rem}}@media (prefers-color-scheme:dark){.dark\:bg-gray-800{--bg-opacity:1;background-color:#2d3748;background-color:rgba(45,55,72,var(--bg-opacity))}.dark\:bg-gray-900{--bg-opacity:1;background-color:#1a202c;background-color:rgba(26,32,44,var(--bg-opacity))}.dark\:border-gray-700{--border-opacity:1;border-color:#4a5568;border-color:rgba(74,85,104,var(--border-opacity))}.dark\:text-white{--text-opacity:1;color:#fff;color:rgba(255,255,255,var(--text-opacity))}.dark\:text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}}
        * {
            box-sizing: border-box;
        }
        body {
            background: #FFF2E3;
        }
        .books {
            position: relative;
            max-width: 500px;
            margin: 50px auto 0;
            text-align: center;
        }
        .form-inner:before {
            display: inline-block;
            margin-top: -45px;
            content: url(images/books.png);
        }
        .form-inner {
            padding: 0 40px 10px;
            margin-top: 45px;
            background: #ffffff;
            border-radius: 2px;
            box-shadow: 0 0 6px 1px rgba(0, 0, 0, .1);
        }
        .form-inner h2 {
            font-weight: 300;
            font-size: 20px;
            text-transform: uppercase;
            font-family: 'Cormorant Garamond', serif;
        }
        .form-content {
            position: relative;
            margin: 30px -40px 0 -40px;
            padding: 10px 40px 0 40px;
            background: #FFF8F3;
        }
        .form-content:before {
            content: "";
            position: absolute;
            top: -4px;
            right: 0;
            left: 0;
            height: 2px;
            border-top: 1px solid #DDDDDD;
            border-bottom: 1px solid #DDDDDD;
        }
        .form-content h3 {
            font-family: 'Marck Script', cursive;
            font-size: 22px;
            color: #898989;
            font-weight: normal;
        }
        .form-content input, .form-content select {
            height: 38px;
            line-height: 38px;
            padding: 0 10px;
            background: #ffffff;
            border: 1px solid #DDDDDD;
            font-size: 20px;
            font-family: 'Cormorant Garamond', serif;
            color: #808080;
            outline: none;
        }
        .form-content input {
            width: 100%;
        }
        .form-content input:focus, .form-content select:focus {
            border-color: #C44D58;
        }
        .form-content input[type="submit"] {
            margin: 20px 0;
            padding: 0 10px;
            background: #FF6B6B;
            color: #ffffff;
            font-size: 18px;
            text-transform: uppercase;
            border-width: 0;
            border-radius: 20px;
            cursor: pointer;
            transition: .2s linear
        }
        .form-content input[type="submit"]:hover {
            background: #C44D58;
        }
        p{
            font-family: 'Marck Script', cursive;
            font-size: 22px;
            color: #898989;
            font-weight: normal;
        }
        .table_blur {
            background: #f5ffff;
            border-collapse: collapse;
            text-align: left;
            position: relative;
            margin: 50px auto 0;
            width: 90%;
        }
        .table_blur th {
            border-top: 1px solid #777777;
            border-bottom: 1px solid #777777;
            box-shadow: inset 0 1px 0 #999999, inset 0 -1px 0 #999999;
            background: linear-gradient(#9595b6, #5a567f);
            color: white;
            padding: 10px 15px;
            position: relative;
        }
        .table_blur th:after {
            content: "";
            display: block;
            position: absolute;
            left: 0;
            top: 25%;
            height: 25%;
            width: 100%;
            background: linear-gradient(rgba(255, 255, 255, 0), rgba(255,255,255,.08));
        }
        .table_blur tr:nth-child(odd) {
            background: #ebf3f9;
        }
        .table_blur th:first-child {
            border-left: 1px solid #777777;
            border-bottom:  1px solid #777777;
            box-shadow: inset 1px 1px 0 #999999, inset 0 -1px 0 #999999;
        }
        .table_blur th:last-child {
            border-right: 1px solid #777777;
            border-bottom:  1px solid #777777;
            box-shadow: inset -1px 1px 0 #999999, inset 0 -1px 0 #999999;
        }
        .table_blur td {
            border: 1px solid #e3eef7;
            padding: 10px 15px;
            position: relative;
            transition: all 0.5s ease;
        }
        .table_blur tbody:hover td {
            color: transparent;
            text-shadow: 0 0 3px #a09f9d;
        }
        .table_blur tbody:hover tr:hover td {
            color: #444444;
            text-shadow: none;
        }
    </style>
</head>
    <body>
    <form action="{{route('admin.book.create')}}" method="POST" class="books">
        {{csrf_field()}}
        <div class="form-inner">
            <p style=" font-size: 30px;">Внесіть нову книгу</p>
            <div class="form-content">
                <p>Назва книги:<input type="text" maxlength="100" minlength="5" name="book_name" required></p>
                <p>Автор книги:<input type="text" maxlength="100" minlength="5" name="author_name" required></p>
                <p><input type="submit" value="Додати"></p>
            </div>
        </div>
    </form>
    @if(isset($books) && count($books)>0)
        <table class="table_blur">
            <tr>
                <th>Назва книги</th>
                <th>Автор книги</th>
                <th>Книга</th>
                <th>Хто?</th>
            </tr>
            @foreach($books as $book)
                <tr>
                    <td>{{$book->title ?? 'Немає title'}}</td>
                    <td>{{$book->author ?? 'Немає author'}}</td>
                    <td>{{$book->active ? 'Вільна' : 'Зарезервована'}}</td>{{-- офіс або людина --}}
                    <td>{{$book->active ? 'Офіс' : ''}}</td>
                </tr>
            @endforeach
        </table>
    @else
        <div style="text-align: center;font-size: 25px"><b>Книг немає</b></div>
    @endif
    </body>
</html>
