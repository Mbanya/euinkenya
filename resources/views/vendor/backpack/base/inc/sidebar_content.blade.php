{{-- This file is used to store sidebar items, inside the Backpack admin panel --}}
<li class="nav-item"><a class="nav-link" href="{{ backpack_url('dashboard') }}"><i class="la la-home nav-icon"></i> {{ trans('backpack::base.dashboard') }}</a></li>

<li class="nav-item"><a class="nav-link" href="{{ backpack_url('speaker') }}"><i class="nav-icon la la-person-booth"></i> Speakers</a></li>
<li class="nav-item"><a class="nav-link" href="{{ backpack_url('sponsor') }}"><i class="nav-icon la la-money"></i> Sponsors</a></li>
<li class="nav-item"><a class="nav-link" href="{{ backpack_url('program') }}"><i class="nav-icon la la-calendar"></i> Programs</a></li>
<li class="nav-item"><a class="nav-link" href="{{ backpack_url('attendee') }}"><i class="nav-icon la la-people-carry"></i> Attendees</a></li>
