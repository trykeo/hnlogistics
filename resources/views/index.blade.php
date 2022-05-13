<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Book Website</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

</head>
<body>
        <div class="container mt-3">
            <div class="d-flex justify-content-between ">
                <div>
                    <h1>Member List</h1>
                </div>
                {{-- <div> 
                    <a href="{{route('form.create')}}"><i class=""></i>Add New User</a>
               </div> --}}
            </div>

            <div>
                <div>
                    <table class="table table-striped table-hover mt-3">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Name</th>
                                <th>Phone</th>
                                <th>Location</th>
                                {{-- <th>Action</th> --}}
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($forms as $form)
                                <tr>
                                    <td>{{$form->id}}</td>
                                    <td>{{$form->name}}</td>
                                    <td>{{$form->phone}}</td>
                                    <td>{{$form->location}}</td>
                                    
                                    {{-- <td class="d-flex justify-content-start">
                                        <div><a class=" mx-1 btn btn-warning first-letter:" href="{{route('form.show', $form->id)}}">Gold Card</a></div> 
                                        <div><a class=" mx-1 btn btn-success first-letter:" href="{{route('silver', $form->id)}}">Silver Card</a></div> 
                                       
                                    </td> --}}
                                </tr>
                            @endforeach
                        </tbody>
                      </table>
                </div>
            </div>
        </div>



    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>

</body>
</html>