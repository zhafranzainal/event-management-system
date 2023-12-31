@extends('layouts.user-base')


@section('title', 'Home')

@section('css')
    <link rel="stylesheet" href="{{ asset('css/home.css') }}">
@endsection


<body>

    @section('header')
        <section class="m-0 p-9 text-left"
            style="min-height:430px; background-image: url('https://image.freepik.com/free-vector/abstract-digital-technology-background-with-network-connection-lines_1017-25552.jpg'); background-repeat:repeat; background-size:cover;">

            <div style="padding-top: 100px;">

                <img src="https://www.delltechnologies.com/content/dam/DellEMC/UnifiedHomepage/images/features/progressive-images/2020/dt-exp-logo-1000x253.png"
                    width="300" class="m-0">

                <h1 class="text-white text-4xl mt-7 mb-3">IT Development Program (ITDP)</h1>
                <h4 class="text-white text-3xl">Learn and thrive in our global and innovative environment.</h4>

            </div>

        </section>
    @endsection

    @section('body')

        <section class="container md:mx-9">
            <div class="row md:m-8 md:mx-9 md:px-9">

                <div class="col-sm-6">

                    <h1 class="text-2xl font-bold leading-7 text-gray-900 sm:text-3xl sm:truncate">IT Development Program
                        (ITDP)</h1>

                    <div class="hidden sm:block" aria-hidden="true">
                        <div class="py-3">
                            <div class="w-20 border-2 border-blue-900"></div>
                        </div>
                    </div>

                    <div class="md:pr-9">
                        <p class="text-justify">
                            The ITDP is a 2-year program that provides our graduate hires with opportunities to network,
                            learn and thrive in our global and innovative environment. We provide continuous support,
                            mentorship and training to help launch your career. Assignments will involve real world
                            challenges with in IT, continuous valuable training, networking sessions with global leaders,
                            volunteering & stretch assignments opportunities, continuous mentorship guidance, peer social
                            networking & teambuilding days.
                        </p>
                    </div>

                </div>

                <div class="col-sm-6">
                    <img class="d-block w-auto h-80"
                        src="https://image.freepik.com/free-photo/professional-programmer-working-late-dark-office_1098-18705.jpg"
                        alt="ITDP Program">
                </div>

            </div>
        </section>

        <section class="pt-9">

            <h2 class="text-3xl font-bold my-3 text-center">Currently Active Events</h2>

            <div class="row">

                <div class="col">
                    <div class="card" style="width: 18rem;" data-html="true" data-toggle="popover" data-trigger="hover"
                        title="Training"
                        data-content="<span class='leading-8'>• Duration: 2 hours <br />• Platform: Zoom <br />• Speaker: Adrea<br /><span class='py-1 px-2 bg-yellow-100 rounded-md'>3 pm, Today</span></span>">

                        <img class="card-img-top"
                            src="https://img-b.udemycdn.com/course/480x270/1462428_639f_7.jpg?secure=9eSyGyx60hYin_wmKUMM2A%3D%3D%2C1612441245"
                            alt="Card image cap">

                        <div class="card-body">
                            <h5 class="card-title font-bold">Photography Masterclass</h5>
                            <p class="card-text">Learn extra skills for with a complete guide to photography.</p>
                            <a href="#recent-event-1" data-toggle="modal" data-target="#recent-event-1"
                                class="btn btn-primary my-2">Register</a>
                        </div>

                    </div>
                </div>

                <div class="col">
                    <div class="card" style="width: 18rem;" data-html="true" data-toggle="popover" data-trigger="hover"
                        title="Volunteering"
                        data-content="<span class='leading-8'>• Duration: 3 hours <br />• Platform: Zoom <br />• Speaker: Mr Ahmad<br /><span class='py-1 px-2 bg-yellow-100 rounded-md'>1 pm, Today</span></span>">

                        <img class="card-img-top" src="https://img-c.udemycdn.com/course/750x422/914296_3670_8.jpg"
                            alt="Card image cap">

                        <div class="card-body">
                            <h5 class="card-title font-bold">Dell's Social Engagement</h5>
                            <p class="card-text">Complete Amazon Web Services Cloud training with Dell!</p>
                            <a href="#recent-event-2" data-toggle="modal" data-target="#recent-event-2"
                                class="btn btn-primary my-2">Register</a>
                        </div>

                    </div>
                </div>

                <div class="col">
                    <div class="card" style="width: 18rem;" data-html="true" data-toggle="popover" data-trigger="hover"
                        title="Training"
                        data-content="<span class='leading-8'>• Duration: 3 hours <br />• Platform: Zoom <br />• Speaker: Mr Adam<br /><span class='py-1 px-2 bg-yellow-100 rounded-md'>2 pm, Tomorrow</span></span>">

                        <img class="card-img-top"
                            src="https://img-b.udemycdn.com/course/480x270/2196488_8fc7_7.jpg?secure=G2jVlPuRwdWAbGvsdd180w%3D%3D%2C1612441243"
                            alt="Card image cap">

                        <div class="card-body">
                            <h5 class="card-title font-bold">Ultimate AWS Certified Solutions</h5>
                            <p class="card-text">Complete Amazon Web Services Cloud training with Dell!</p>
                            <a href="#recent-event-3" data-toggle="modal" data-target="#recent-event-3"
                                class="btn btn-primary my-2">Register</a>
                        </div>

                    </div>
                </div>

                <div class="col">
                    <div class="card" style="width: 18rem;" data-html="true" data-toggle="popover" data-trigger="hover"
                        title="Training"
                        data-content="<span class='leading-8'>• Duration: 4 hours <br />• Platform: Zoom <br />• Speaker: Ashley<br /><span class='py-1 px-2 bg-yellow-100 rounded-md'>2 pm, Tomorrow</span></span>">

                        <img class="card-img-top"
                            src="https://img-b.udemycdn.com/course/480x270/1754098_e0df_3.jpg?secure=eHxDC4l4q-DEIUXxYVYKBw%3D%3D%2C1612441243"
                            alt="Card image cap">

                        <div class="card-body">
                            <h5 class="card-title font-bold">Complete Data Science Bootcamp</h5>
                            <p class="card-text">Complete Data Science Training: Mathematics, Statistics, Python.</p>
                            <a href="#recent-event-4" data-toggle="modal" data-target="#recent-event-4"
                                class="btn btn-primary my-2">Register</a>
                        </div>

                    </div>
                </div>

            </div>

        </section>

        <hr>

        <section>
            <div class="row text-center">

                <div class="col text-lg">
                    <i class="far fa-clock mr-2"></i>
                    Go at your own pace
                </div>

                <div class="col text-lg">
                    <i class="fas fa-chalkboard-teacher mr-2"></i>
                    Learn from industry experts
                </div>

                <div class="col text-lg">
                    <i class="fas fa-user-friends mr-2"></i>
                    Join interactive activities
                </div>

            </div>
        </section>

        <hr>

        <section class="p-5">

            <h2 class="text-3xl font-bold my-3 text-center">Register for ITDP Events</h2>

            <div class="row">

                <div class="col-sm-4">
                    <div id='filters' class='sections'>

                        <div>

                            <h4>Category</h4>

                            <div>
                                <input type='checkbox' name='cat' id='social' value='social'>
                                Social Gathering
                                </input>
                            </div>

                            <div>
                                <input type='checkbox' name='cat' id='training' value='training'>
                                Training
                                </input>
                            </div>

                            <div>
                                <input type='checkbox' name='cat' id='volunteering' value='volunteering'>
                                Volunteering
                                </input>
                            </div>

                            <div>
                                <input type='checkbox' name='cat' id='summit' value='summit'>
                                Summit
                                </input>
                            </div>

                        </div>

                        <div>
                            <br>
                            <input class="px-2 py-1" type='button' id='none' value='Clear all'></input>
                        </div>

                    </div>
                </div>

                <div class="col-sm-8">

                    {{-- {% for event in event_obj %} --}}
                    {{-- {% if event.category.name == 'Social Hangouts' %} --}}

                    <!-- one -->
                    <div class="card card-category m-3" data-cat="social">
                        <div class="row">

                            <div class="col-sm-4 content-center p-5">
                                <img width="220" height="200"
                                    src="https://image.freepik.com/free-photo/professional-programmer-working-late-dark-office_1098-18705.jpg"
                                    sizes="(max-width: 350px) 100vw, 350px">
                            </div>

                            <div class="col-sm-8">
                                <div class="">
                                    <div class="card-body">
                                        <div class="mb-2">

                                            <span class="text-secondary">CategoryName</span>
                                            <h5 class="card-title text-lg font-bold">EventName</h5>
                                            <p class="card-text">EventDescription</p>

                                            <h6 class="card-subtitle mb-2 text-muted mt-2">Registration Due Datetime:
                                                DueTime
                                            </h6>

                                            <a id="event-reg-modal-pop" data-url="{% url 'event_reg_modal' event.id %}"
                                                class="btn btn-primary" role="button">Register</a>

                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>

                    {{-- {% elif event.category.name == 'Volunteering' %} --}}

                    <!-- two -->
                    <div class="card card-category m-3" data-cat="volunteering">
                        <div class="row">

                            <div class="col-sm-4 content-center p-5">
                                <img width="220" height="200"
                                    src="https://image.freepik.com/free-photo/professional-programmer-working-late-dark-office_1098-18705.jpg"
                                    sizes="(max-width: 350px) 100vw, 350px">
                            </div>

                            <div class="col-sm-8">
                                <div class="">
                                    <div class="card-body">
                                        <div class="mb-2">

                                            <span class="text-secondary">CategoryName</span>
                                            <h5 class="card-title text-lg font-bold">EventName</h5>
                                            <p class="card-text">EventDescription</p>

                                            <h6 class="card-subtitle mb-2 text-muted mt-2">Registration Due Datetime:
                                                DueTime
                                            </h6>

                                            <a id="event-reg-modal-pop" data-url="{% url 'event_reg_modal' event.id %}"
                                                class="btn btn-primary" role="button">Register</a>

                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>

                    {{-- {% elif event.category.name == 'Summits' %} --}}

                    <!-- three -->
                    <div class="card card-category m-3" data-cat="summit">
                        <div class="row">

                            <div class="col-sm-4 content-center p-5">
                                <img width="220" height="200"
                                    src="https://image.freepik.com/free-photo/professional-programmer-working-late-dark-office_1098-18705.jpg"
                                    sizes="(max-width: 350px) 100vw, 350px">
                            </div>

                            <div class="col-sm-8">
                                <div class="">
                                    <div class="card-body">
                                        <div class="mb-2">

                                            <span class="text-secondary">CategoryName</span>
                                            <h5 class="card-title text-lg font-bold">EventName</h5>
                                            <p class="card-text">EventDescription</p>

                                            <h6 class="card-subtitle mb-2 text-muted mt-2">Registration Due Datetime:
                                                DueTime
                                            </h6>

                                            <a id="event-reg-modal-pop" data-url="{% url 'event_reg_modal' event.id %}"
                                                class="btn btn-primary" role="button">Register</a>

                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>

                    {{-- {% elif event.category.name == 'Trainings' %} --}}

                    <!-- four -->
                    <div class="card card-category m-3" data-cat="training">
                        <div class="row">

                            <div class="col-sm-4 content-center p-5">
                                <img width="220" height="200"
                                    src="https://image.freepik.com/free-photo/professional-programmer-working-late-dark-office_1098-18705.jpg""
                                    sizes="(max-width: 350px) 100vw, 350px">
                            </div>

                            <div class="col-sm-8">
                                <div class="">
                                    <div class="card-body">
                                        <div class="mb-2">

                                            <span class="text-secondary">CategoryName</span>
                                            <h5 class="card-title text-lg font-bold">EventName</h5>
                                            <p class="card-text">EventDescription</p>

                                            <h6 class="card-subtitle mb-2 text-muted mt-2">Registration Due Datetime:
                                                DueTime
                                            </h6>

                                            <a id="event-reg-modal-pop" data-url="{% url 'event_reg_modal' event.id %}"
                                                class="btn btn-primary" role="button">Register</a>

                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>

                    {{-- {% endif %} --}}

                    {{-- {% endfor %} --}}

                </div>

            </div>

        </section>

        <script src="{{ asset('js/home.js') }}"></script>
        <script src="{{ asset('js/menu.js') }}"></script>

        <script>
            $(function() {
                $('[data-toggle="popover"]').popover()
            })
        </script>

        <div id="event-reg-modal-container"></div>

    @endsection

</body>
