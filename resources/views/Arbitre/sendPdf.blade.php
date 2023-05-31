<!DOCTYPE html>
<html>
   <head>
      <title> Send Report </title>
      <link rel="stylesheet" type="text/css" href="/css/insPhiCss/upload.css">
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
   </head>
   <body>
      <div class="container mt-5">
         <div class="panel panel-primary">
            <div class="panel-heading">
               <h2>Send Report</h2>
            </div>
            <div class="panel-body">
               @if ($message = Session::get('success'))
                   <div class="alert alert-success alert-block">
                      <button type="button" class="close" data-dismiss="alert">×</button>
                      <strong>{{ $message }}</strong>
                   </div>
               @endif
 
               @if (count($errors) > 0)
               <div class="alert alert-danger">
                  <strong>Whoops!</strong> There were some problems with your input.
                  <ul>
                     @foreach ($errors->all() as $error)
                     <li>{{ $error }}</li>
                     @endforeach
                  </ul>
               </div>
               @endif
 
               <form action="{{ route('envoyer.pdf') }}" method="POST" enctype="multipart/form-data">
                @csrf
                  <div class="row">
 
                     <div class="col-md-12">
                        <div class="col-md-6 form-group">
                           <label>Select file :</label>
                           <input type="file" name="pdf" accept=".pdf" class="form-control"/>
                        </div>
                        <div class="col-md-6 form-group">
                           <button type="submit" onclick="afficherPopup(event)" class="btn btn-success">Send</button>
                        </div>
                     </div>
                  </div>
               </form>
            </div>
         </div>
      </div>
   </body>
</html>