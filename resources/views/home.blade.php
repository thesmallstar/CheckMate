@extends('layouts.app1')

@section('content')

<body>
    <div class="textbox" style="position: absolute;
        width: 1050px;
        height: 600px;
        left: 22%;
        top: 243px;
        background: #FFFFFF;
        border: 1px solid #B0B0B0;
        box-sizing: border-box;
        padding-bottom:50px;
        border-radius: 10px;">
        <div class="boxhead" style="position: relative;
        width: 1049px;
        height: 60px;
        left: 0px;
        top: 0px;
        background-color: #929697;
        border-radius: 10px 10px 0px 0px;">
            <h3 class="boxtitle">Dashboard</h3>
        </div>
        <hr class="hr1">
    </div>
    <div>
        @if(Auth::user()->type)
        <button class="button" type="button" onclick="window.location='papers/create';" style="position: absolute;
        left: 24%;
        top: 320px;
        background-color: #1B98E0; 
        border: none;
        border-radius: 5px;
        color: white;
        padding: 12px 25px;
        text-align: center;
        display: inline-block;
        font-size: 18px;
        font-family: 'Roboto';">Add new paper</button>
        @if(session('msg'))
        <div class="alert alert-success" style="margin-top:10px;">
          <strong>Success!</strong>{{session('msg')}}
        </div>
        @endif
        <p class="h3">Your Paper:</p>
        <button class="btn1"></button>
       <div class="top">    
        <table>
                <tr>
                    <td style="width:80px " class="headrow">Sr no</td>
                    <td style="width:180px " class="headrow">Name</td>
                    <td style="width:180px " class="headrow">Date created</td>
                    <td  class="headrow">No of questions</td>
                    <td style="width:100px " class="headrow">Marks</td>
                    <td style="width:80px " class="headrow">Status</td>
                </tr>
                <hr class="hr1">
                <?php $i=1; ?>
                <tbody>
                @foreach($papersgiven as $paper)
                <tr>
                        <td style="width:80px " class="row"><?php echo $i ?></td>
                        <td style="width:180px " class="row"><a href="papers/{{$paper->id}}">{{$paper->name}}</a></td>
                        <td style="width:180px " class="row">{{$paper->created_at->format('d/m/y')}}</td>
                        <td  class="row">{{$paper->numQ}}</td>
                        <td style="width:100px " class="row">{{$paper->total}}</td>
                        <td style="width:80px " class="row">{{$paper->status}}</td>
                </tr>
                <?php $i++; ?>
                @endforeach
                </tbody>
        </table>
       @endif
        <!--else-->
       </div>
    </div>

 </body>
</html>
