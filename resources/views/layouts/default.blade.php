<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>@yield('title')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous" />
</head>

<body>

    @include('layouts.includes.header')

    @section('main-content')
        {{-- <section>
            <div class="d-flex justify-center items-start gap-4 mt-5 px-5">
                <div>
                    <h3>Bootstrap 5 Starter Templates</h3>
                    <p>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit.
                        Cumque sed eligendi repellendus nam commodi nemo ea
                        dignissimos maxime! Neque deleniti modi sed perferendis
                        pariatur! Voluptate sed, eveniet, possimus unde
                        cupiditate quasi voluptates modi aut corrupti delectus
                        nobis neque quas veniam. Impedit, aspernatur vero ex
                        saepe ut alias ipsam et voluptatem, libero, odio eaque
                        itaque unde. Amet porro nisi quis reprehenderit
                        blanditiis, cumque ipsa incidunt qui totam repellat sint
                        nam reiciendis eaque nesciunt placeat accusamus nulla
                        ipsum doloribus voluptatibus libero animi vitae
                        asperiores officia! Voluptatibus ad enim autem rem vero
                        natus, id molestias provident. Quae explicabo recusandae
                        possimus placeat veritatis temporibus.
                    </p>

                    <p>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit.
                        Recusandae, veniam quasi. Distinctio eveniet totam
                        nesciunt, praesentium assumenda voluptates cupiditate
                        laborum veritatis sunt facere quas! Aperiam eligendi sed
                        asperiores illum dolorem inventore minus voluptate
                        adipisci repellendus placeat, eius nulla consequuntur
                        aut assumenda incidunt maiores mollitia culpa. Quo
                        molestias magni inventore vero.
                    </p>
                </div>
                <div>
                    <h3>Start Your New Project</h3>
                    <p>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit.
                        Cumque sed eligendi repellendus nam commodi nemo ea
                        dignissimos maxime! Neque deleniti modi sed perferendis
                        pariatur! Voluptate sed, eveniet, possimus unde
                        cupiditate quasi voluptates modi aut corrupti delectus
                        nobis neque quas veniam. Impedit, aspernatur vero ex
                        saepe ut alias ipsam et voluptatem, libero, odio eaque
                        itaque unde. Amet porro nisi quis reprehenderit
                        blanditiis, cumque ipsa incidunt qui totam repellat sint
                        nam reiciendis eaque nesciunt placeat accusamus nulla
                        ipsum doloribus voluptatibus libero animi vitae
                        asperiores officia! Voluptatibus ad enim autem rem vero
                        natus, id molestias provident. Quae explicabo recusandae
                        possimus placeat veritatis temporibus.
                    </p>

                    <p>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit.
                        Recusandae, veniam quasi. Distinctio eveniet totam
                        nesciunt, praesentium assumenda voluptates cupiditate
                        laborum veritatis sunt facere quas! Aperiam eligendi sed
                        asperiores illum dolorem inventore minus voluptate
                        adipisci repellendus placeat, eius nulla consequuntur
                        aut assumenda incidunt maiores mollitia culpa. Quo
                        molestias magni inventore vero.
                    </p>
                </div>
            </div>
        </section> --}}
        {{-- @endsection --}}
    @show

    @include('layouts.includes.footer')

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
</body>

</html>
