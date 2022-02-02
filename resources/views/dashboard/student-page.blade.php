@extends('layouts.appHeading')

@section('content')
    <button class="add-student-btn flex px-4 py-2 rounded-md text-white font-semibold tracking-wide cursor-pointer" id="open-btn" onclick="openModal('my-modal')">
        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" aria-hidden="true" role="img" width="24" height="24" preserveAspectRatio="xMidYMid meet" viewBox="0 0 24 24"><g fill="none"><circle cx="12" cy="7" r="5" stroke="#f8f8f8" stroke-width="2"/><path d="M17 22H5.266a2 2 0 0 1-1.985-2.248l.39-3.124A3 3 0 0 1 6.649 14H7" stroke="#f8f8f8" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/><path d="M19 13v6" stroke="#f8f8f8" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/><path d="M16 16h6" stroke="#f8f8f8" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></g></svg>
        <p class="text-md">Add Student</p>
    </button>
    <div class="modal-div hidden fixed inset-0 overflow-y-auto h-full w-full" id="my-modal">
        <div class="form-div relative top-20 mx-auto p-5 border w-50 shadow-lg rounded-md bg-white opacity-100 px-3 py-5">
            @if ($errors->any())          
                <ul class="error-message">
                    @foreach ($errors->all() as $error)
                        <li class="font-semibold">{{$error}}</li>
                    @endforeach
                </ul>
            @endif
            <form method="POST" action="{{route('students.store')}}" class="w-full" enctype="multipart/form-data">
                @csrf
                <div class="mb-4">
                    <label for="picture" class="block text-gray-700 text-sm font-semibold mb-2">Picture</label>
                    <input id="picture" class="block mt-1 w-full appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none" type="file" name="picture"/>
                </div>
                <div class="mb-4">
                    <label for="firstname" class="block text-gray-700 text-sm font-semibold mb-2">Firstname</label>
                    <input id="firstname" class="block mt-1 w-full appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none" type="firstname" name="firstname" :value="old('firstname')" required  />
                </div>
                <div class="mb-4">
                    <label for="lastname" class="block text-gray-700 text-sm font-semibold mb-2">Lastname</label>
                    <input id="lastname" class="block mt-1 w-full appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none" type="lastname" name="lastname" :value="old('lastname')" required  />
                </div>
                <div class="mb-4">
                    <label for="phone_number" class="block text-gray-700 text-sm font-semibold mb-2">Phone Number</label>
                    <input id="phone_number" class="block mt-1 w-full appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none" type="phone_number" name="phone_number" :value="old('phone_number')"  />
                </div>
                <div class="mb-4">
                    <label for="address" class="block text-gray-700 text-sm font-semibold mb-2">Address</label>
                    <input id="address" class="block mt-1 w-full appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none" type="address" name="address" :value="old('address')"  />
                </div>
                <div class="mb-4">
                    <label for="enrolled_in" class="block text-gray-700 text-sm font-semibold mb-2">Enrolled In</label>
                    <select class="block mt-1 w-full appearance-none rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none" name="enrolled_in">
                        <option value="2022">2022</option>
                        <option value="2021">2021</option>
                        <option value="2020">2020</option>
                        <option value="2019">2019</option>
                        <option value="2018">2018</option>
                        <option value="2017">2017</option>
                        <option value="2016">2016</option>
                    </select>
                </div>
                <div class="mb-4">
                    <label for="status" class="block text-gray-700 text-sm font-semibold mb-2">Status</label>
                    <select class="block mt-1 w-full appearance-none rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none" name="status">
                        <option value="Active">Active</option>
                        <option value="Inactive">Inactive</option>
                    </select>
                </div>
                <button class=" mt-2 block w-full px-4 py-3 add-student-form-btn rounded font-semibold text-sm text-white uppercase tracking-widest focus:outline-none disabled:opacity-25 transition mb-2">
                    {{ __('Add Student') }}
                </button>
            </form>
        </div>
    </div>  
    @if ($errors->any())
        <script type="text/javascript">
            let modalEl = document.getElementById("my-modal");
            modalEl.style.display="block"
            window.onclick = function(event){
                if(event.target == modalEl){
                    modalEl.style.display = "none"
                }
            }
        </script>   
    @endif
    @if($message = Session::get('flash_message'))
        <div class="success-message rounded">
            <p class="text-center font-bold text-base text-white py-3">{{$message}}</p>
        </div>    
    @endif
    <div class="table-div w-full">
        <table class="w-full leading-normal">
            <thead>
                <tr class="table-header">
                    <th class="px-5 py-3 border-b-2 bg-gray-100 border-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">Image</th>
                    <th class="px-5 py-3 border-b-2 bg-gray-100 border-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">Student Id</th>                    
                    <th class="px-5 py-3 border-b-2 bg-gray-100 border-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">Firstname</th>
                    <th class="px-5 py-3 border-b-2 bg-gray-100 border-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">Lastname</th>
                    <th class="px-5 py-3 border-b-2 uppercase bg-gray-100 border-gray-100 text-left text-xs font-semibold text-gray-600 tracking-wider">Phone Number</th>
                    <th class="px-5 py-3 border-b-2 uppercase bg-gray-100 border-gray-100 text-left text-xs font-semibold text-gray-600 tracking-wider">Address</th>
                    <th class="px-5 py-3 border-b-2 uppercase bg-gray-100 border-gray-100 text-left text-xs font-semibold text-gray-600 tracking-wider">Enrolled In</th>
                    <th class="px-5 py-3 border-b-2 uppercase bg-gray-100 border-gray-100 text-left text-xs font-semibold text-gray-600 tracking-wider">Status</th>
                    <th class="px-5 py-3 border-b-2 uppercase bg-gray-100 border-gray-100 text-left text-xs font-semibold text-gray-600 tracking-wider">Action</th>                    
                </tr>                                                                                
            </thead>
            <tbody>
                @foreach($students_list as $student)
                    <tr>
                        <td class="px-5 py-5 border-b border-gray-200 bg-white">
                            <img src="profile-pictures/{{$student->picture}}" alt="Nkubito Pacis" class="w-10 h-10 flex-shrink-0 rounded-full profile-picture">
                        </td>
                        <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                            <p class="text-gray-900 whitespace-no-wrap">{{$student->student_id}}</p>
                        </td>                        
                        <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                            <p class="text-gray-900 whitespace-no-wrap">{{$student->firstname}}</p>
                        </td>
                        <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                            <p class="text-gray-900 whitespace-no-wrap">{{$student->lastname}}</p>
                        </td>
                        <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                            <p class="text-gray-900 whitespace-no-wrap">{{$student->phone_number ? $student->phone_number: 'Not Available'}}</p>
                        </td>
                        <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                            <p class="text-gray-900 whitespace-no-wrap">{{$student->address ? $student->address : 'Not Available'}}</p>
                        </td>
                        <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                            <p class="text-gray-900 whitespace-no-wrap">{{$student->enrolled_in}}</p>
                        </td>
                        <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                            <p class="text-gray-900 whitespace-no-wrap">{{$student->status}}</p>
                        </td>
                        <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                            <button class="action-btn rounded-md px-4 py-2 text-white font-semibold" title="Take Action On this Student" id="action-btn" onclick="openModal('student-modal');{{session()->put('current_user',$student)}}">View</button>
                        </td>
                    </tr> 
                @endforeach
                                
            </tbody>
        </table>
    </div> 
    <div class="modal-div hidden fixed inset-0 overflow-y-auto h-full w-full" id="student-modal">
        <div class="form-div student-view relative mx-auto border shadow-lg rounded-md bg-white opacity-100">
           @if(session()->get('current_user') != '') 
                <div class="profile-picture-div">
                    <div class="overlay-div"></div>
                    <img src="profile-pictures/1643101173.jpg" alt="Nkubito Pacis" class=" profile-picture-one-student-view">
                </div>
                <div class="lines">
                    <div class="first-line"></div>
                    <p class="font-semibold">Names And Student Id</p>
                    <div class="second-line"></div>
                </div>
                <p class="mb-4 student-label names mt-5" title="Names">
                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" aria-hidden="true" role="img" width="26" height="26" preserveAspectRatio="xMidYMid meet" viewBox="0 0 24 24"><g fill="none"><circle cx="12" cy="7" r="5" stroke="#699bf7" stroke-width="2"/><path d="M17 14h.352a3 3 0 0 1 2.976 2.628l.391 3.124A2 2 0 0 1 18.734 22H5.266a2 2 0 0 1-1.985-2.248l.39-3.124A3 3 0 0 1 6.649 14H7" stroke="#699bf7" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></g></svg>
                    {{session()->get('current_user')->firstname}} {{session()->get('current_user')->lastname}} 
                </p>
                <p class="mb-4 student-label" title="Student Id">
                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" aria-hidden="true" role="img" width="26" height="26" preserveAspectRatio="xMidYMid meet" viewBox="0 0 24 24"><path d="M9.715 12c1.151 0 2-.849 2-2s-.849-2-2-2s-2 .849-2 2s.848 2 2 2z" fill="#699bf7"/><path d="M20 4H4c-1.103 0-2 .841-2 1.875v12.25C2 19.159 2.897 20 4 20h16c1.103 0 2-.841 2-1.875V5.875C22 4.841 21.103 4 20 4zm0 14l-16-.011V6l16 .011V18z" fill="#699bf7"/><path d="M14 9h4v2h-4zm1 4h3v2h-3zm-1.57 2.536c0-1.374-1.676-2.786-3.715-2.786S6 14.162 6 15.536V16h7.43v-.464z" fill="#699bf7"/></svg>
                    {{session()->get('current_user')->student_id}}
                </p>
                <div class="lines mb-4">
                    <div class="first-line"></div>
                    <p class="font-semibold">Phone And Address</p>
                    <div class="second-line"></div>
                </div>
                <p class="mb-4 student-label" title="Phone Number">
                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" aria-hidden="true" role="img" width="26" height="26" preserveAspectRatio="xMidYMid meet" viewBox="0 0 16 16"><g fill="#699bf7"><path d="M11 1a1 1 0 0 1 1 1v12a1 1 0 0 1-1 1H5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1h6zM5 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H5z"/><path d="M8 14a1 1 0 1 0 0-2a1 1 0 0 0 0 2z"/></g></svg>
                    {{session()->get('current_user')->phone_number ? session()->get('current_user')-> phone_number : 'Not Available'}}
                </p>
                <p class="mb-4 student-label" title="Address">
                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" aria-hidden="true" role="img" width="26" height="26" preserveAspectRatio="xMidYMid meet" viewBox="0 0 16 16"><g fill="#699bf7"><path d="M8.354 1.146a.5.5 0 0 0-.708 0l-6 6A.5.5 0 0 0 1.5 7.5v7a.5.5 0 0 0 .5.5h4.5a.5.5 0 0 0 .5-.5v-4h2v4a.5.5 0 0 0 .5.5H14a.5.5 0 0 0 .5-.5v-7a.5.5 0 0 0-.146-.354L13 5.793V2.5a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5v1.293L8.354 1.146zM2.5 14V7.707l5.5-5.5l5.5 5.5V14H10v-4a.5.5 0 0 0-.5-.5h-3a.5.5 0 0 0-.5.5v4H2.5z"/></g></svg>
                    {{session()->get('current_user')->address ? session()->get('current_user')->address : 'Not Available'}}
                </p>
                <div class="lines mb-4">
                    <div class="first-line"></div>
                    <p class="font-semibold">Enrolling year & status</p>
                    <div class="second-line"></div>
                </div>
                <p class="mb-4 student-label"  title="Enrolled in">
                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" aria-hidden="true" role="img" width="26" height="26" preserveAspectRatio="xMidYMid meet" viewBox="0 0 24 24"><path d="M21 10h-2V4h1V2H4v2h1v6H3a1 1 0 0 0-1 1v9h20v-9a1 1 0 0 0-1-1zm-7 8v-4h-4v4H7V4h10v14h-3z" fill="#699bf7"/><path d="M9 6h2v2H9zm4 0h2v2h-2zm-4 4h2v2H9zm4 0h2v2h-2z" fill="#699bf7"/></svg>
                    {{session()->get('current_user')->enrolled_in}}
                </p>
                <p class="mb-4 student-label" title="Status">
                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" aria-hidden="true" role="img" width="26" height="26" preserveAspectRatio="xMidYMid meet" viewBox="0 0 24 24"><g fill="none"><path d="M12 3a8.98 8.98 0 0 1 3.164.572l-1.183 1.192a7.5 7.5 0 1 0 5.276 5.335l1.194-1.203C20.806 9.864 21 10.91 21 12a9 9 0 1 1-9-9zm9.06-.328l.146.136a2.763 2.763 0 0 1 .008 3.9l-6.304 6.354a1.5 1.5 0 0 1-.652.385l-4.212 1.209a.5.5 0 0 1-.618-.619l1.21-4.22a1.5 1.5 0 0 1 .377-.642l6.309-6.36a2.74 2.74 0 0 1 3.736-.143zm-2.671 1.2l-6.31 6.36l-.712 2.484l2.478-.71l6.304-6.355c.457-.461.486-1.186.088-1.68l-.095-.107a1.24 1.24 0 0 0-1.753.007z" fill="#699bf7"/></g></svg>
                    {{session()->get('current_user')->status}}
                </p>
                <div class="action-buttons">
                    <button class="delete-student-btn flex rounded-md text-white font-semibold cursor-pointer" id="open-btn">
                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" aria-hidden="true" role="img" width="24" height="24" preserveAspectRatio="xMidYMid meet" viewBox="0 0 1024 1024"><path d="M360 184h-8c4.4 0 8-3.6 8-8v8h304v-8c0 4.4 3.6 8 8 8h-8v72h72v-80c0-35.3-28.7-64-64-64H352c-35.3 0-64 28.7-64 64v80h72v-72zm504 72H160c-17.7 0-32 14.3-32 32v32c0 4.4 3.6 8 8 8h60.4l24.7 523c1.6 34.1 29.8 61 63.9 61h454c34.2 0 62.3-26.8 63.9-61l24.7-523H888c4.4 0 8-3.6 8-8v-32c0-17.7-14.3-32-32-32zM731.3 840H292.7l-24.2-512h487l-24.2 512z" fill="#f8f8f8"/></svg>
                        <p class="text-md">Delete Student</p>
                    </button>
                    <button class="update-student-btn flex rounded-md text-white font-semibold cursor-pointer" id="open-btn">
                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" aria-hidden="true" role="img" width="24" height="24" preserveAspectRatio="xMidYMid meet" viewBox="0 0 1024 1024"><path d="M257.7 752c2 0 4-.2 6-.5L431.9 722c2-.4 3.9-1.3 5.3-2.8l423.9-423.9a9.96 9.96 0 0 0 0-14.1L694.9 114.9c-1.9-1.9-4.4-2.9-7.1-2.9s-5.2 1-7.1 2.9L256.8 538.8c-1.5 1.5-2.4 3.3-2.8 5.3l-29.5 168.2a33.5 33.5 0 0 0 9.4 29.8c6.6 6.4 14.9 9.9 23.8 9.9zm67.4-174.4L687.8 215l73.3 73.3l-362.7 362.6l-88.9 15.7l15.6-89zM880 836H144c-17.7 0-32 14.3-32 32v36c0 4.4 3.6 8 8 8h784c4.4 0 8-3.6 8-8v-36c0-17.7-14.3-32-32-32z" fill="#f8f8f8"/></svg>
                        <p class="text-md">Update Student</p>
                    </button>
                @endif    
            </div>
        </div>
    </div>  
    <script type="text/javascript">
            let my_modal = document.getElementById("my-modal");
            let student_modal = document.getElementById("student-modal");
        window.onclick = function(event){
            if(event.target == my_modal){
                my_modal.style.display = "none"
            }
            else if(event.target == student_modal){
                student_modal.style.display = "none"
            }
        }
        function openModal(modalId){
            let modal = document.getElementById(modalId);
            modal.style.display= "block";
        }
    </script>    
@endsection

