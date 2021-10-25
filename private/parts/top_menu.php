<div class="top-nav">
      <div class="main-menu">
        <div class="main-menu__left">
          <a href="#" class="main-menu__logo">
            <svg
              height="2.125em"
              viewBox="0 0 34 34"
              fill="#0077B5"
              xmlns="http://www.w3.org/2000/svg"
            >
              <path
                d="M30.4583 0.708328H3.54159C1.97678 0.708328 0.708252 1.97685 0.708252 3.54166V30.4583C0.708252 32.0231 1.97678 33.2917 3.54159 33.2917H30.4583C32.0231 33.2917 33.2916 32.0231 33.2916 30.4583V3.54166C33.2916 1.97685 32.0231 0.708328 30.4583 0.708328Z"
                fill="white"
              />
              <path
                fill-rule="evenodd"
                clip-rule="evenodd"
                d="M0 2.84034C0 1.27166 1.27079 0 2.84034 0H31.1597C32.7283 0 34 1.27079 34 2.84034V31.1597C34 32.7283 32.7292 34 31.1597 34H2.84034C1.27166 34 0 32.7292 0 31.1597V2.84034ZM13.4583 12.9625H18.0625V15.2759C18.7262 13.9457 20.4269 12.75 22.9819 12.75C27.8793 12.75 29.0417 15.3977 29.0417 20.2562V29.2542H24.0833V21.3626C24.0833 18.5959 23.4196 17.0354 21.7317 17.0354C19.3906 17.0354 18.4167 18.7177 18.4167 21.3626V29.2542H13.4583V12.9625ZM4.95833 29.0417H9.91667V12.75H4.95833V29.0417ZM10.625 7.4375C10.625 9.19771 9.19771 10.625 7.4375 10.625C5.67729 10.625 4.25 9.19771 4.25 7.4375C4.25 5.67729 5.67729 4.25 7.4375 4.25C9.19771 4.25 10.625 5.67729 10.625 7.4375Z"
              />
            </svg>
          </a>

          <div class="main-menu__search">
            <form action="">
              <input
                type="text"
                class="main-menu__search-bar"
                placeholder="Search"
                name="search-bar"
              />
              <button type="submit" class="search-button">
                <svg
                  class="search-icon"
                  viewBox="0 0 11 12"
                  fill="none"
                  stroke="#2D3E49"
                  xmlns="http://www.w3.org/2000/svg"
                >
                  <circle cx="4.5" cy="4.5" r="4" stroke="inherit" />
                  <path
                    d="M7 7.5L10.5 11"
                    stroke="inherit"
                    stroke-linecap="round"
                  />
                </svg>
              </button>
            </form>
          </div>
        </div>
        <nav class="main-menu__right">
          <a href="#" title="Home">
            <span class="icon icon-home"></span>
            <span class="text">Home</span>
          </a>
          <a href="#" title="My network">
            <span class="icon icon-network"></span>
            <span class="text">My network</span>
          </a>
          <a href="#" title="Jobs">
            <span class="icon icon-jobs"></span>
            <span class="text">Jobs</span>
          </a>
          <a href="#" title="Messaging">
            <span class="icon icon-messaging"></span>
            <span class="text">Messaging</span>
          </a>
          <a href="#" title="Notifications">
            <span class="icon icon-notifications"></span>
            <span class="text">Notifications</span>
          </a>
          <a href="#" title="Profile">
            <span class="icon"><span class="avatar">J</span></span> 
            <span class="text"> Me <i class="icon-arrow_down"></i> </span>
          </a>
          <div class="vertical-line"></div>
          <a href="#" class="last-item" title="Work">
            <span class="icon icon-work"></span>
            <span class="text">Work <i class="icon-arrow_down"></i> </span>
          </a>
        </nav>
        <a href="#" class="dropdown" onclick="triggerNav('.main-menu__right')">
            <svg class="dropdown-icon" viewBox="0 0 18 12" xmlns="http://www.w3.org/2000/svg">
                <path d="M0 12H18V10H0V12ZM0 7H18V5H0V7ZM0 0V2H18V0H0Z"/>
            </svg>                
        </a>
      </div>
    </div>