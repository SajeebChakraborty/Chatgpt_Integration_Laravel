
<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" />

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

<link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">

<div class="container">
<div class="row clearfix">

            <div class="header">
                <h2 style="font-size:40px !important; text-align:center; margin-bottom:40px;"><strong>Artifical </strong> Chat App</h2>
                
            </div>
    <div class="col-lg-12">
        <div class="card">

           
           
            <div class="chat">
                
                <div class="chat-header clearfix">
                    <div class="row">
                        <div class="col-lg-6">
                            <a href="javascript:void(0);" data-toggle="modal" data-target="#view_info">
                                <img src="https://bootdey.com/img/Content/avatar/avatar2.png" alt="avatar">
                            </a>
                            <div class="chat-about">
                                <h6 class="m-b-0">Virtual Assistant</h6>
                                <small></small>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="chat-history">
                    <ul class="m-b-0">
                        <li class="clearfix">
                            <div class="message-data text-right">

                                <img src="https://bootdey.com/img/Content/avatar/avatar7.png" alt="avatar">

                            </div>

                            @if(isset($output))

                                <div class="message other-message float-left"> <b>Question : </b> {{ $question }} </div>

                                <br>
                                <br>

                                <div class="message other-message float-right">  <b>Reply : </b> {{ $output }} </div>

                            @else

                                <div class="message other-message float-right"> Please ask me ... </div>

                            @endif

                        </li>
                                                     
                    </ul>
                </div>
                <form method="post" action="/chat">

                    @csrf

                    <div class="chat-message clearfix">

                        <div class="input-group mb-0">
                            
                            <div class="input-group-prepend">
                            <button type="submit"> <span class="input-group-text" style="border:none !important;"><i class="fa fa-send"></i></span> </button>  
                            </div>
                            <input type="text" class="form-control" name="message" placeholder="Enter text here...">                                  
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
</div>

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>