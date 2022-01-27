
    <body>
            <div class="sidebar">
              <div class="sidebar-logo">
                <x-application-logo></x-application-logo>
              </div>
              <ul class="dashboard-items-group">
                  <li class="dashboard-item">  
                    <a href="/dashboard" class="{{(request()->is('dashboard')) ? 'active' : ''}}">                        
                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" aria-hidden="true" role="img" width="24" height="24" preserveAspectRatio="xMidYMid meet" viewBox="0 0 24 24"><g fill="none"><path d="M21 21h-8v-6h8v6zm-10 0H3V11h8v10zm10-8h-8V3h8v10zM11 9H3V3h8v6z" fill="#699bf7"/></g></svg>
                          <h3>Dashboard</h3>
                    </a>
                  </li>
                  <li class="dashboard-item">
                    <a href="/students" class="{{(request()->is('students')) ? 'active' : ''}}">
                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" aria-hidden="true" role="img" width="24" height="24" preserveAspectRatio="xMidYMid meet" viewBox="0 0 256 256"><path d="M224 64l-96 32l-96-32l96-32z" opacity=".2" fill="#699bf7"/><path d="M226.5 56.4l-96-32a8.5 8.5 0 0 0-5 0l-95.9 32h-.2l-1 .5h-.1l-1 .6c0 .1-.1.1-.2.2l-.8.7l-.7.8c0 .1-.1.1-.1.2l-.6.9c0 .1 0 .1-.1.2l-.4.9l-.3 1.1v.3A3.7 3.7 0 0 0 24 64v80a8 8 0 0 0 16 0V75.1l33.6 11.2A63.2 63.2 0 0 0 64 120a64 64 0 0 0 30 54.2a96.1 96.1 0 0 0-46.5 37.4a8.1 8.1 0 0 0 2.4 11.1a7.9 7.9 0 0 0 11-2.3a80 80 0 0 1 134.2 0a8 8 0 0 0 6.7 3.6a7.5 7.5 0 0 0 4.3-1.3a8.1 8.1 0 0 0 2.4-11.1a96.1 96.1 0 0 0-46.5-37.4a64 64 0 0 0 30-54.2a63.2 63.2 0 0 0-9.6-33.7l44.1-14.7a8 8 0 0 0 0-15.2zM176 120a48 48 0 0 1-96 0a48.6 48.6 0 0 1 9.3-28.5l36.2 12.1a8 8 0 0 0 5 0l36.2-12.1A48.6 48.6 0 0 1 176 120zm-9.3-45.3h-.1L128 87.6L89.4 74.7h-.1L57.3 64L128 40.4L198.7 64z" fill="#699bf7"/></svg>
                        <h3>Students</h3>
                    </a>
                </li>
                <li class="dashboard-item">
                    <a href="/teachers" class="{{(request()->is('teachers')) ? 'active' : ''}}">
                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" aria-hidden="true" role="img" width="24" height="24" preserveAspectRatio="xMidYMid meet" viewBox="0 0 32 32"><path d="M4 6v2h22v16H12v2h18v-2h-2V6H4zm4.002 3A4.016 4.016 0 0 0 4 13c0 2.199 1.804 4 4.002 4A4.014 4.014 0 0 0 12 13c0-2.197-1.802-4-3.998-4zM14 10v2h5v-2h-5zm7 0v2h3v-2h-3zM8.002 11C9.116 11 10 11.883 10 13c0 1.12-.883 2-1.998 2C6.882 15 6 14.12 6 13c0-1.117.883-2 2.002-2zM14 14v2h10v-2H14zM4 18v8h2v-6h3v6h2v-5.342l2.064 1.092c.585.31 1.288.309 1.872 0v.002l3.53-1.867l-.933-1.77l-3.531 1.867l-3.096-1.634A3.005 3.005 0 0 0 9.504 18H4z" fill="#699bf7"/></svg>
                        <h3>Teachers</h3>
                    </a>
                </li>
                <li class="dashboard-item">
                    <a href="/workers" class="{{(request()->is('workers')) ? 'active' : ''}}">
                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" aria-hidden="true" role="img" width="24" height="24" preserveAspectRatio="xMidYMid meet" viewBox="0 0 64 64"><path d="M9.5 32H62l-4.064-4.064C56.218 16.886 47.607 8.123 36.637 6.167C36.374 3.828 34.412 2 32.002 2s-4.373 1.827-4.635 4.166C16.396 8.121 7.782 16.885 6.064 27.935L2 32h7.5zm41.838-5.625h-3.396c-1.204-7.588-4.731-13.818-9.38-16.875c6.336 3.116 11.122 9.33 12.776 16.875zM30.125 16.063v-5.625h3.75v5.625H39.5v3.75h-5.625v5.625h-3.75v-5.625H24.5v-3.75h5.625zM25.438 9.5c-4.646 3.057-8.176 9.287-9.38 16.875h-3.396C14.317 18.83 19.104 12.616 25.438 9.5z" fill="#699bf7"/><path d="M54.5 34v1.75c0 12.408-10.093 22.5-22.5 22.5c-12.405 0-22.5-10.092-22.5-22.5V34H5.75v1.75C5.75 50.225 17.525 62 32 62s26.25-11.775 26.25-26.25V34H54.5z" fill="#699bf7"/></svg>
                        <h3>Workers</h3>
                    </a>
                </li>
                <li class="dashboard-item">
                    <a href="/income" class="{{(request()->is('income')) ? 'active' : ''}}">
                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" aria-hidden="true" role="img" width="24" height="24" preserveAspectRatio="xMidYMid meet" viewBox="0 0 512 512"><path fill="#699bf7" d="M432 64H16v320h416zm-32 288H48V96h352z"/><path fill="#699bf7" d="M464 144v272H96v32h400V144h-32z"/><path fill="#699bf7" d="M224 302.46c39.7 0 72-35.137 72-78.326s-32.3-78.326-72-78.326s-72 35.136-72 78.326s32.3 78.326 72 78.326zm0-124.652c22.056 0 40 20.782 40 46.326s-17.944 46.326-40 46.326s-40-20.782-40-46.326s17.944-46.326 40-46.326z"/><path fill="#699bf7" d="M80 136h32v176H80z"/><path fill="#699bf7" d="M336 136h32v176h-32z"/></svg>
                        <h3>Income</h3>
                    </a>
                </li>
                <li class="dashboard-item">
                    <a href="/liabilities" class="{{(request()->is('liabilities')) ? 'active' :''}}">
                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" aria-hidden="true" role="img" width="24" height="24" preserveAspectRatio="xMidYMid meet" viewBox="0 0 24 24"><path d="M21.706 5.292l-2.999-2.999A.996.996 0 0 0 18 2H6a.996.996 0 0 0-.707.293L2.294 5.292A.994.994 0 0 0 2 6v13c0 1.103.897 2 2 2h16c1.103 0 2-.897 2-2V6a.994.994 0 0 0-.294-.708zM6.414 4h11.172l1 1H5.414l1-1zM4 19V7h16l.002 12H4z" fill="#699bf7"/><path d="M7 14h3v3h4v-3h3l-5-5z" fill="#699bf7"/></svg>
                        <h3>Liabilities</h3>
                    </a>
                </li>
              </ul>
            </div>