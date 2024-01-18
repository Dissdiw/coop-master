<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <!-- <link rel="stylesheet" href="{{asset('/css/signup.css')}}"> -->
    <!-- <link rel="stylesheet" href="{{asset('/js/signup.css')}}"> -->
    @stack('css')
</head>
<body>
    {{ $slot }}
    @stack('js')
    <script type="text/javascript">
      // Preview
      image.onchange = evt => {
        const [file] = image.files
        if (file) {
          img.src = URL.createObjectURL(file)
        }
      }
    </script>
</body>

</html>
