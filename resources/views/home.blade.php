
<!DOCTYPE html>
<html lang  =   "en">
<head>
    <meta charset  =   "UTF-8">
    <meta name     =   "viewport" content =  "width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" />
    <link href="{{ asset('site/css/style.css') }}" rel="stylesheet">
</head>
<body>
    <div class="container">
        <div class="row d-flex row">
            <div class="box col-md-4"> 
                <div class='note'>
                    <i class="fa-solid fa-book-open-reader"></i>  
                    <button type="button" class="submitForm" >  Notes </button>
                </div>
        
                <div class="reminder">
                    <i class="fa-solid fa-bell"></i>  
                    <button type="button" class="submitForm" >Reminders</button>
                </div>
        
                <div class="edit">
                    <i class="fa-solid fa-pen-to-square"></i>   
                    <a href="{{route('edit')}}"><button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalLong">
                        Edit
                      </button></a>
                </div>
        
                <div class="archive">
                    <i class="fa-solid fa-boxes-packing"></i>  
                    <button type="button" class="submitForm" >Archive</button>
                </div>
        
                <div class="bin">
                    <i class="fa-solid fa-dumpster"></i>   
                    <button type="button" class="submitForm" >Bin</button>
                </div>
            </div>
            <div class="takenote col-md-8">
                @yield('content')
                <div class="writenote">
                    <input type="text" id="title" class="form-control" placeholder="Title...">
                    <input type="text" id="write notes" class="form-control" placeholder="Take a note...">
                    <div class = "icon">
                        <i class="fa-solid fa-hourglass-end reminder"></i>
                     <i class="fa-solid fa-user-plus collaborator"></i>
                     <i class="fa-solid fa-palette background"></i>
                     <i class="fa-regular fa-image image"></i>
                     <i class="fa-solid fa-boxes-packing archive"></i>
                     <i class="fa-solid fa-ellipsis-vertical more"></i>
                     <i class="fa-solid fa-rotate-left undo"></i>
                     <i class="fa-solid fa-rotate-right redo"></i>
                    </div>
                </div>
                
            </div>
        </div>
    </div>
    
        {{-- <div class = "card">
            @foreach
            <div class = "title">{{$keep->title}}</div>
            <div class = "content">{{$keep->content}}</div>
        </div> --}}

<style>
    @import url('https://fonts.googleapis.com/css2?family=Heebo&display=swap');*
    *{
    padding: 0;
    margin: 0;
    box-sizing: border-box;

}

body {
    background-color: rgb(238, 29, 29)
    min-height= 100vh;
 
}

.row{
    display: flex;
}
.box{
    background: rgb(228, 228, 230);
    height: 400px;
    width: 300px;
    padding: 20px;
    min-height: 100vh;
}

.box .note{
    font-size: medium;
    font-weight: bold;
    padding:10px;
}

.box .reminder{
    font-size: medium;
    font-weight: bold;
    padding:10px;  
}

.box .edit{
    font-size: medium;
    font-weight: bold;
    padding:10px;  
}

.box .archive{
    font-size: medium;
    font-weight: bold;
    padding:10px;  
}

.box .bin{
    font-size: medium;
    font-weight: bold;
    padding:10px;  
}
 
.takenote {
    background-color:#fff;
    display: flex;
    align-items: center;
    text-align: center;
    justify-content: center;
    height: 100vh;
    width: 100%;
    padding: 20px;
    /* min-height: 100vh; */
}

.takenote .writenote {
    width: 500px;
    height:200px;
    border:5px #0e0d0d;
    padding: 20px;
    background-color: #fff;
    border-radius: 10px;
    box-shadow: 0 0 10px #141313;
}

.container .row .takenote .writenote input{
    border:2px #fff;
    border-bottom: none;
    margin-bottom: 20px;
    background: #fff;
    outline: rgb(24, 15, 2);
    width: 400px;
    height: 40px;
    color: rgb(24, 15, 2);
    font-size: 15px;
}


.container .row .takenote .writenote .icon .reminder{
margin-right: 35px;
}

.container .row .takenote .writenote .icon .collaborator {
margin-right: 35px;
}

.container .row .takenote .writenote .icon .background{
margin-right: 35px;
}

.container .row .takenote .writenote .icon .image{
margin-right: 15px;
}

.container .row .takenote .writenote .icon .archive{
margin-left: 15px;
}

.container .row .takenote .writenote .icon .more{
margin-left: 35px;
}

.container .row .takenote .writenote .icon .undo{
margin-left: 35px;
}

.container .row .takenote .writenote .icon .redo{
margin-left: 35px;
}
</style>
</body>
</html> 