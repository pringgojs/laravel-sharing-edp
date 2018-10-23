<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <title>Document</title>
</head>
<body>
    <div class="row">
        <h3 class="h3">Table</h3>
        <div class="col-lg-12">
            <table class="table table-bordered table-responsive table-striped">
                <thead>
                    <tr>
                        <th>Title</th>
                        <th>Content</th>
                    </tr>
                </thead>
                
                <tbody>
                    @foreach($list_blog as $blog)
                    <tr>
                        <td>{{$blog->title}}</td>
                        <td>{{$blog->content}}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</body>
</html>