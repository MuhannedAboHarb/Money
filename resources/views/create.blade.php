<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <title>Document</title>

    <style>
        form {
            max-width: 500px;
            margin: 0 auto;
            margin-top: 100px;
            padding: 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        .form-group.mb-3 .btn-primary {
            display: block;
            width: 100%;
            margin-top: 20px;
        }
    </style>


</head>

<body>
    <form action="{{ route('store') }}" method="post">
        <h1>دفع الجمعية</h1>
        @csrf
        <div class="row">
            <div class="col-md-6">
                <div class="form-group mb-3">
                    <label for="price">Price</label>
                    <input type="text" name="price" id="price"
                        class="form-control @error('price') is-invalid   @enderror">
                    @error('price')
                        <p class="invalid-feedback">{{ $message }}</p>
                    @enderror
                </div>


                {{-- <div class="form-group mb-3">
                    <label for="day">Day</label>
                    <input type="text" name="day" id="day"
                        class="form-control @error('day') is-invalid   @enderror">
                    @error('day')
                        <p class="invalid-feedback">{{ $message }}</p>
                    @enderror
                </div> --}}
            </div>
        </div>

        <div class="form-group mb-3">
            <button type="submit" class="btn btn-primary">Submit</button>
            <a href="{{ route('index') }}" class="btn btn-success">Back</a>
        </div>
    </form>
</body>

</html>
