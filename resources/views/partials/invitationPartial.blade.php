<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!-- CDN Fontawesome -->
    <script type="text/javascript">
            window.onload = () => {
                $('#myModal').modal('show');
            }
        </script>
    <script
        src="https://kit.fontawesome.com/32f82e1dca.js"
        crossorigin="anonymous"
    ></script>

    <!-- CDN Fancybox -->
    <script src="https://cdn.jsdelivr.net/npm/@fancyapps/ui@5.0/dist/fancybox/fancybox.umd.js"></script>
    <link
        rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/@fancyapps/ui@5.0/dist/fancybox/fancybox.css"
    />
    <!-- CDN Slick -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.min.css" integrity="sha512-17EgCFERpgZKcm0j0fEq1YCJuyAWdz9KUtv1EjVuaOz8pDnh/0nZxmU6BBXwaaxqoi9PQXnRWqlcDB027hgv9A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.css" integrity="sha512-yHknP1/AwR+yx26cB1y0cjvQUMvEa2PFzt1c9LlS4pRQ5NOTZFWbhBig+X9G9eYW/8m0/4OXNx8pxJ6z57x0dw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link
        rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css"
        />
    <link rel="stylesheet" href="{{ asset('assets/css/styles.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/responsive.css') }}">
    <title>Leo Vania</title>
</head>
<body>
    @yield('main')
 <script src="https://cdn.jsdelivr.net/gh/mcstudios/glightbox/dist/js/glightbox.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
        <script src="https://code.jquery.com/jquery-3.7.0.min.js" integrity="sha256-2Pmvv0kuTBOenSvLm6bvfBSSHrUJ+3A7x6P5Ebd07/g=" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js" integrity="sha512-XtmMtDEcNz2j7ekrtHvOVR4iwwaD6o/FUJe6+Zq+HgcCsk3kj4uSQQR8weQ2QVj1o0Pk6PwYLohm206ZzNfubg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
        <script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>
        <script src="{{ asset('assets/js/showImage.js') }}"></script>

        <script src="{{ asset('assets/js/gallery.js') }}"></script>

        <script>
                const modal = document.getElementById('myModal');
                const audio = document.getElementById('myAudio');

                const closeBtn = modal.querySelector('.close');

                closeBtn.addEventListener("click", function(){
                    modal.style.display = "none";
                    audio.play();
                });
        </script>

        {{-- <script>
            document.addEventListener("DOMContentLoaded", function(){
                const radioAttend = document.getElementById('attend');
                const radioNotAttend = document.getElementById('notAttend');
                const formAttendance = document.getElementById('formAttendance');

                radioAttend.addEventListener('click', function(){
                    formAttendance.style.display = "block";
                });

                radioNotAttend.addEventListener('click', function(){
                    formAttendance.style.display = "none";
                });
            });
        </script> --}}

        <script>
            let text = document.getElementById('noRek').innerHTML;
            const copyContent = async () => {
                try {
                    await navigator.clipboard.writeText(text);
                    console.log('No Rekening copied to clipboard');
                }
                catch (err) {
                    console.error('Failed to copy: ', err);
                }
            }
            </script>

        <script src="{{ asset('assets/js/playAudio.js') }}"></script>
        <script src="{{ asset('assets/js/iframeControl.js') }}"></script>
        <script src="{{ asset('assets/js/scroll.js') }}"></script>
</body>
</html>
