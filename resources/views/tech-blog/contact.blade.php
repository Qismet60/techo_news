@extends('tech-blog.main')

@section('main')

    <br>
    <div class="page-title lb single-wrapper">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
                    <h2><i class="fa fa-envelope-open-o bg-orange"></i> Contact us <small
                            class="hidden-xs-down hidden-sm-down">Nulla felis eros, varius sit amet volutpat
                            non. </small></h2>
                </div><!-- end col -->
                <div class="col-lg-4 col-md-4 col-sm-12 hidden-xs-down hidden-sm-down">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Contact</li>
                    </ol>
                </div><!-- end col -->
            </div><!-- end row -->
        </div><!-- end container -->
    </div><!-- end page-title -->

    <section class="section wb">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="page-wrapper">
                        <div class="row">
                            <div class="col-lg-5">
                                <h4>Who we are</h4>
                                <p>Tech Blog is a personal blog for handcrafted, cameramade photography content, fashion
                                    styles from independent creatives around the world.</p>

                                <h4>How we help?</h4>
                                <p>Etiam vulputate urna id libero auctor maximus. Nulla dignissim ligula diam, in
                                    sollicitudin ligula congue quis turpis dui urna nibhs. </p>

                                <h4>Pre-Sale Question</h4>
                                <p>Fusce dapibus nunc quis quam tempor vestibulum sit amet consequat enim. Pellentesque
                                    blandit hendrerit placerat. Integertis non.</p>
                            </div>
                            <div class="col-lg-7 formdiv">
                                <form class="form-wrapper" id="form-wrapper">
                                    <label for="name">Name</label>
                                    <input name="name" type="text" class="form-control" placeholder="Your name">
                                    <label for="email">Name</label>
                                    <input name="email" type="email" class="form-control" placeholder="Email address">
                                    <label for="phone">Name</label>
                                    <input name="number" type="number" class="form-control" placeholder="Phone">
                                    <label for="subject">Name</label>
                                    <input name="subject" type="text" class="form-control" placeholder="Subject">
                                    <label for="message">Name</label>
                                    <textarea id="message" class="form-control" placeholder="Your message"></textarea>
                                </form>
                                <button type="submit" class="btn btn-primary send">Send <i
                                        class="fa fa-envelope-open-o"></i></button>
                            </div>
                        </div>
                    </div><!-- end page-wrapper -->
                </div><!-- end col -->
            </div><!-- end row -->
        </div><!-- end container -->
    </section>
    <script>
        let token = document.head.querySelector('meta[name="csrf-token"]');
        if (token) {
            window.axios.defaults.headers.common['X-CSRF-TOKEN'] = token.content;
        } else {
            console.error('CSRF token not found: https://laravel.com/docs/csrf#csrf-x-csrf-token');
        }
    </script>
    <script>
        $('.formdiv').on('click', '.send', function () {

            var name = $('input[name=name]').val();
            var email = $('input[name=email]').val();
            var number = $('input[name=number]').val();
            var subject = $('input[name=subject]').val();
            var message = $('#message').val();
            if (name.length == '0' || email.length == '0' || number.length == '0' || subject.length == '0' || message.length == '0') {
                alert('Error')
            } else {
                axios.post('/feedback',
                    {
                        name: name,
                        email: email,
                        number: number,
                        subject: subject,
                        message: message
                    })
                    .then(function (response) {
                        console.log(response)
                    })
                    .catch(function (error) {
                        console.log(error);
                    });
            }


        })
    </script>
@endsection
