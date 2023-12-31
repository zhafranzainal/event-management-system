<nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-blue-dell md:px-9">

    <div class="md:container float-left">
        <a href="{{ route('home') }}">
            <div class="float-left">

                <img class="h-6" src="https://tbcdn.talentbrew.com/company/375/v2_0/img/logo-dell-technologies.svg"
                    alt="Logo">

            </div>
        </a>
    </div>

    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">

        <span class="navbar-toggler-icon"></span>

    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">

        <ul class="navbar-nav mr-auto text-blue-300 hover:text-white">

            <li class="nav-item mx-3 w-max">
                <a class="nav-link w-max text-white" href="{{ route('home') }}">Home</a>
            </li>

            <li class="nav-item mx-3">
                <a class="nav-link w-max text-white" href="{% url 'pt_event_mngt' %}">Event Management</a>
            </li>

            {{-- {% if request.user.role.role_name == 'Committee Lead' %} --}}
            <li class="nav-item mx-3">
                <a class="nav-link w-max text-white" href="{% url 'cl_event_mngt' %}">Committee Lead</a>
            </li>
            {{-- {% endif %} --}}

            {{-- {% if request.user.role.role_name == 'Program Manager' %} --}}
            <li class="nav-item mx-3">
                <a class="nav-link w-max text-white" href="{% url 'pm_event_proposal' %}">Program Manager</a>
            </li>
            {{-- {% endif %} --}}

        </ul>

        {{-- {% if user.is_authenticated %} --}}
        <ul class="nav navbar-nav navbar-right ml-auto justify-content-end">
            <li class="nav-item dropdown">

                <a href="#" data-toggle="dropdown" class="nav-link dropdown-toggle user-action mx-3">
                    Hi, FullName! <b class="caret"></b>
                </a>

                <ul class="dropdown-menu dropdown-menu-right">
                    <li>
                        <div class="text-center">
                            <a href="{% url 'logout' %}" class="btn btn-danger hover:bg-blue-900" role="button">
                                Log Out
                            </a>
                        </div>
                    </li>
                </ul>

            </li>
        </ul>

        {{-- {% else %} --}}
        <div class="text-center w-max">
            <a href="{% url 'login' %}" class="btn btn-primary hover:bg-blue-900" role="button">Log In</a>
        </div>

        {{-- {% endif %} --}}

    </div>

</nav>
