@if(auth()->check())
  <div class="member-menu clearfix">
    <ul class="actions text-right">
      <li>Welcome {{auth()->user()->name}}</li>
      <li class="drowdown">
        <a href="#" class="dropdown-toggle" id="memberMenu" 
           data-toggle="dropdown" 
           aria-haspopup="true" aria-expanded="true">
           <i class="zmdi zmdi-menu"></i>
        </a>
        <ul class="dropdown-menu pull-right sub-menu" aria-labelledby="memberMenu">
          <li class="profile-wrapper text-center">
            <a href="{{url('/member/profile/picture/edit')}}" class="person-avatar" style="background-image: url('{{asset(@$user->profile->profile_image)}}')">
              <span class="hover-text">
                Upload
              </span>
            </a>
            <p class="f-medium c-black">
              @if(auth()->user()->account_type=='personal')
                Profile Picture
              @else
                Company Logo
              @endif
            </p>
          </li>
          </li>
          <li>
            <a href="{{url('/member/')}}">
              <i class="zmdi zmdi-view-dashboard"></i>
              Dashboard
            </a>
          </li>
          <li>
            <a href="{{url('/member/profile/personal-info')}}">
              <i class="zmdi zmdi-account-circle"></i>
              Personal Information
            </a>
          </li>
          <li>
            <a href="{{url('/member/profile/spouse-or-co-maker-info')}}">
              <i class="zmdi zmdi-help"></i>
              Co-Maker Information
            </a>
          </li>
          <li>
            <a href="{{url('/member/profile/source-of-income')}}">
              <i class="zmdi zmdi-money-box"></i>
              Source of Income
            </a>
          </li>
          <li>
            <a href="{{route('bank-accounts-index')}}">
              <i class="zmdi zmdi-accounts-list-alt"></i>
              Bank Accounts
            </a>
          </li>
          <li>
            <a href="{{url('/member/profile/trade-references')}}">
              <i class="zmdi zmdi-trending-up"></i>
              Trade References
            </a>
          </li>
          <li>
            <a href="{{url('/member/requirements')}}">
              <i class="zmdi zmdi-storage"></i>
              Upload Documents
            </a>
          </li>
          <li>
            <a href="{{url('/member/application/status')}}">
              <i class="zmdi zmdi-alert-octagon"></i>
              Payment History
            </a>
          <li>
            <a href="{{url('/member/application/status')}}">
              <i class="zmdi zmdi-alert-octagon"></i>
              Loan Application Status
            </a>
          </li>
          <li>
            <a href="{{url('/member/logout')}}">
              <i class="zmdi zmdi-alert-octagon"></i>
              Log out
            </a>
          </li>
        </ul>
      </li>
    </ul>
  </div>
@endif