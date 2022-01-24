@extends('layouts.appHeading')

@section('content')
    <button class="add-student-btn flex px-4 py-2 rounded-md text-white font-semibold tracking-wide cursor-pointer" id="open-btn">
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
            <form method="POST" action="{{route('students.store')}}" class="w-full">
                @csrf
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
    <div class="table-div w-full px-5 py-5">
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
                @foreach ($students_list as $student)
                    <tr>
                        <td class="px-5 py-5 border-b border-gray-200 bg-white">
                            <img src="https://ca.slack-edge.com/TG3A11QGL-USRHLRK0D-f40e5918ae8d-512" alt="Nkubito Pacis" class="w-10 h-10 flex-shrink-0 rounded-full">
                        </td>
                        <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                            <p class="text-gray-900 whitespace-no-wrap">{{$student->id}}</p>
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
                    </tr>                    
                @endforeach
                                
            </tbody>
        </table>
    </div>
    <script type="text/javascript">
        let modal = document.getElementById("my-modal");
        let btn = document.getElementById("open-btn");
        btn.onclick = function(){
            modal.style.display= "block";
        }
        window.onclick = function(event){
            if(event.target == modal){
                modal.style.display = "none"
            }
        }
    </script>    
@endsection

