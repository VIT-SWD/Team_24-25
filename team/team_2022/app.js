const canvas = document.getElementById('cord-page');

var photoList = [
  'team/finance/Aarya Kulkarni.png',
  'team/finance/Prem_Ganesh_Meher.png',
  'team/finance/Tejas Choudhari.png',
  'team/Scholarship/Krushna_Durole.png',
  'team/Scholarship/Manasi Yadav.png',
  'team/Scholarship/Pushkar_Helge.png',
  'team/Scholarship/Rutuja Solankar.png',
  'team/Sponsorship/Abhishek_Kumbhar-removebg-preview.png',
  'team/Sponsorship/Ankur Raut.png',
  'team/Sponsorship/Anurag Ganekar.png',
  'team/Sponsorship/Omkar Lengare.png',
  'team/Sponsorship/Satyajeet_Gore-removebg-preview.png',
  'team/database/Adwait Bhosale.png',
  'team/database/Neha Gandhmal.png',
  'team/database/Sakshi_Walzade-removebg-preview.png',
  'team/database/Snehankit Khandare.png',
  'team/Venue and resources/Sahil Babladkar.png',
  'team/Venue and resources/Varad Kajarekar.png',
  'team/technical/Aarti Dhikale.png',
  'team/technical/Atharva Panchwagh.png',
  'team/technical/Harshada Awalekar.png',
  'team/technical/Sejal Utekar.png',
  'team/technical/Vipassana Telgote.png',
  'team/publicity/Akshay Bhuran.png',
  'team/publicity/Mihir Kanitkar.png',
  'team/publicity/Rushikesh Kahat.png',
  'team/publicity/Tushar Patil.png',
  'team/publicity/Waidehi Gautam.png',
  'team/Animal Rescue/Aditya Kesale.png',
  'team/Animal Rescue/Adwait Bhosale.png',
  'team/Animal Rescue/Pallavi Kale.png',
  'team/Animal Rescue/Parth_Gurjar-removebg-preview.png',
  'team/Animal Rescue/Shruti Tibile.png',
  'team/Animal Rescue/Susmita Waghmare.png',
  'team/Animal Rescue/Tanaya Barabde.png',
  'team/Animal Rescue/Tanmay Adbale.png',
  'team/Animal Rescue/Vidhi Mehta.png',
  'team/Multimedia and design/Mitul Koul.png',
  'team/Multimedia and design/Shrutika Nandurkar.png',
  'team/Multimedia and design/Sonal Kadam.png',
  'team/Multimedia and design/Tanaya Barabde.png',
  'team/Multimedia and design/Tejas Adsare.png',
  'team/Multimedia and design/Vinay Pardhi.png',
  'team/website/Rishikesh Unawane.png',
  'team/website/Shraadha Kanase.png',
  'team/Content and Social Media/Achal Ninawe.png',
  'team/Content and Social Media/Anuja Dargode.png',
  'team/Content and Social Media/Ashay Patil.png',
  'team/Content and Social Media/Devyani Thokal.png',
  'team/Content and Social Media/Dhiraj Patil.png',
  'team/Content and Social Media/Divya Pawar.png',
  'team/Content and Social Media/Gargee Athalye.png',
  'team/Content and Social Media/Mayuri Jaigude.png',
  'team/Content and Social Media/Neha Revnang.png',
  'team/Content and Social Media/Praharsh Churi.png',
  'team/Content and Social Media/Pushkar Sonawane.png',
  'team/Content and Social Media/Rishikesh Dayma.png',
  'team/Content and Social Media/Rohan Rathod.png',
  'team/Content and Social Media/Roopal Tatiwar.png',
  'team/Content and Social Media/Rutika Masane.png',
  'team/Content and Social Media/Sanchitee Rokade.png',
  'team/Content and Social Media/Shubham Damale.png',
  'team/Content and Social Media/Swarada Kulkarni.png',
  'team/Research and development/Rohan Rathod.png',
  'team/Research and development/Shubham Damale.png',
  'team/Social Activity/Adwait Bhosale.png',
  'team/Social Activity/Akash Singh.png',
  'team/Social Activity/Dakshata Wasnik.png',
  'team/Social Activity/Devesh_Pardhi-removebg-preview.png',
  'team/Social Activity/Digant_Jakhetiya-removebg-preview.png',
  'team/Social Activity/Harshada Awalekar.png',
  'team/Social Activity/Janhavi_Pawar-removebg-preview.png',
  'team/Social Activity/Janhvi_Godle-removebg-preview.png',
  'team/Social Activity/Mrunal Ahire.png',
  'team/Social Activity/Neha_Ravnang-removebg-preview.png',
  'team/Social Activity/Prachi_Dhamal-removebg-preview.png',
  'team/Social Activity/PREM_BARAVKAR-removebg-preview.png',
  'team/Social Activity/Rutuja Hilay.png',
  'team/Social Activity/Sakshi Bade.png',
  'team/Social Activity/Sakshi Deshpande.png',
  'team/Social Activity/Sakshi_Bakal-removebg-preview.png',
  'team/Social Activity/Sanket jagtap.png',
  'team/Social Activity/Sanskar Agrawal.png',
  'team/Social Activity/Shivpriya Deshmukh (copy).png',
  'team/Social Activity/Tanmay Bhimanwar.png',
  'team/Social Activity/Tanmay_vadnere-removebg-preview.png',
  'team/Social Activity/Vaishnavi Mane.png',
  'team/Social Activity/Vaishnavi_Gawas-removebg-preview.png',
  'team/Social Activity/Viraj Killedar.png',
  'team/Social Activity/Waidehi Gautam.png',
  'team/finance/Aarya Kulkarni.png',
]

var nameList = [
  'Aarya Kulkarni',
  'Prem Meher',
  'Tejas Choudhari',
  'Krushna Durole',
  'Manasi Yadav',
  'Pushkar Helge',
  'Rutuja Solankar',
  'Abhishek Kumbhar',
  'Ankur Raut',
  'Anurag Ganekar',
  'Omkar Lengare',
  'Satyajeet Gore',
  'Adwait Bhosale',
  'Neha Gandhmal',
  'Sakshi Walzade',
  'Snehankit Khandare',
  'Sahil Babladkar',
  'Varad Kajarekar',
  'Aarti Dhikale',
  'Atharva Panchwagh',
  'Harshada Awalekar',
  'Sejal Utekar',
  'Vipassana Telgote',
  'Akshay Bhuran',
  'Mihir Kanitkar',
  'Rushikesh Kahat',
  'Tushar Patil',
  'Waidehi Gautam',
  'Aditya Kesale',
  'Adwait Bhosale',
  'Pallavi Kale',
  'Parth Gurjar',
  'Shruti Tibile',
  'Susmita Waghmare',
  'Tanaya Barabde',
  'Tanmay Adbale',
  'Vidhi Mehta',
  'Mitul Koul',
  'Shrutika Nandurkar',
  'Sonal Kadam',
  'Tanaya Barabde',
  'Tejas Adsare',
  'Vinay Pardhi',
  'Rishikesh Unawane',
  'Shraadha Kanase',
  'Achal Ninawe',
  'Anuja Dargode',
  'Ashay Patil',
  'Devyani Thokal',
  'Dhiraj Patil',
  'Divya Pawar',
  'Gargee Athalye',
  'Mayuri Jaigude',
  'Neha Revnang',
  'Praharsh Churi',
  'Pushkar Sonawane',
  'Rishikesh Dayma',
  'Rohan Rathod',
  'Roopal Tatiwar',
  'Rutika Masane',
  'Sanchitee Rokade',
  'Shubham Damale',
  'Swarada Kulkarni',
  'Rohan Rathod',
  'Shubham Damale',
  'Adwait Bhosale',
  'Akash Singh',
  'Dakshata Wasnik',
  'Devesh Pardhi',
  'Digant Jakhetiya',
  'Harshada Awalekar',
  'Janhavi Pawar',
  'Janhvi Godle',
  'Mrunal Ahire',
  'Neha Ravnang',
  'Prachi Dhamal',
  'PREM BARAVKAR',
  'Rutuja Hilay',
  'Sakshi Bade',
  'Sakshi Deshpande',
  'Sakshi Bakal',
  'Sanket jagtap',
  'Sanskar Agrawal',
  'Shivpriya Deshmukh',
  'Tanmay Bhimanwar',
  'Tanmay vadnere',
  'Vaishnavi Mane',
  'Vaishnavi Gawas',
  'Viraj Killedar',
  'Waidehi Gautam',
  'Aarya Kulkarni',
]

var postList = [
  'Finance Coordinator',
  'Finance Coordinator',
  'Finance Coordinator',
  'Scholarship Coordinator',
  'Scholarship Coordinator',
  'Scholarship Coordinator',
  'Scholarship, Social Activity Coordinator',
  'Sponsorship Coordinator',
  'Sponsorship Coordinator',
  'Sponsorship Coordinator',
  'Sponsorship Coordinator',
  'Sponsorship Coordinator',
  'Database Coordinator',
  'Database Coordinator',
  'Database Coordinator',
  'Database, Publicity, Social Activity Coordinator',
  'Venue and resources, Website Coordinator',
  'Venue and resources, Multimedia Coordinator',
  'Technical Coordinator',
  'Technical Coordinator',
  'Technical Coordinator',
  'Technical Coordinator',
  'Technical Coordinator',
  'Publicity Coordinator',
  'Publicity Coordinator',
  'Publicity Coordinator',
  'Publicity Coordinator',
  'Publicity Coordinator',
  'Animal Rescue Coordinator',
  'Animal Rescue Coordinator',
  'Animal Rescue Coordinator',
  'Animal Rescue Coordinator',
  'Animal Rescue Coordinator',
  'Animal Rescue Coordinator',
  'Animal Rescue Coordinator',
  'Animal Rescue Coordinator',
  'Animal Rescue Coordinator',
  'Multimedia Coordinator',
  'Multimedia Coordinator',
  'Multimedia Coordinator',
  'Multimedia Coordinator',
  'Multimedia Coordinator',
  'Multimedia Coordinator',
  'Website Coordinator',
  'Website Coordinator',
  'Content and Social Media Coordinator',
  'Content and Social Media Coordinator',
  'Content and Social Media Coordinator',
  'Content and Social Media, Research and development, Social Activity Coordinator',
  'Content and Social Media, Social Activity Coordinator',
  'Content and Social Media Coordinator',
  'Content and Social Media, Research and development, Social Activity Coordinator',
  'Content and Social Media Coordinator',
  'Content and Social Media Coordinator',
  'Content and Social Media, Research and development Coordinator',
  'Content and Social Media, Research and development, Social Activity Coordinator',
  'Content and Social Media Coordinator',
  'Content and Social Media Coordinator',
  'Content and Social Media Coordinator',
  'Content and Social Media Coordinator',
  'Content and Social Media, Social Activity Coordinator',
  'Content and Social Media Coordinator',
  'Content and Social Media Coordinator',
  'Research and development Coordinator',
  'Research and development Coordinator',
  'Social Activity Coordinator',
  'Social Activity Coordinator',
  'Social Activity Coordinator',
  'Social Activity Coordinator',
  'Social Activity Coordinator',
  'Social Activity Coordinator',
  'Social Activity Coordinator',
  'Social Activity Coordinator',
  'Social Activity Coordinator',
  'Social Activity Coordinator',
  'Social Activity Coordinator',
  'Social Activity Coordinator',
  'Social Activity Coordinator',
  'Social Activity Coordinator',
  'Social Activity Coordinator',
  'Social Activity Coordinator',
  'Social Activity Coordinator',
  'Social Activity Coordinator',
  'Social Activity Coordinator',
  'Social Activity, Publicity Coordinator',
  'Social Activity Coordinator',
  'Social Activity Coordinator',
  'Social Activity Coordinator',
  'Social Activity Coordinator',
  'Social Activity Coordinator',
  'Finance Coordinator',
]



function imageHover(num) {
  for (let index = 1; index < num; index++) {
    let el = "photo" + index;
    document.getElementById(el).style.zIndex = index;
  }
  el = "photo" + num;
  document.getElementById(el).style.zIndex = "20";

}

function generateRandomColor() {
  var list_color = ['D77FA1', 'E8E8A6', 'FED1EF', 'E7FBBE', 'E6DF9A', 'F7ECDE', '87AAAA', 'CAB8FF', 'C2F784', 'B5EAEA',
    'E4BAD4', 'FFE194', 'CDF5F6', 'CBE4F9', 'EFF9DA', 'F9EBDF', 'D6CDEA', 'F9D8D6'];
  var randomColor = '#' + list_color[Math.floor(Math.random() * list_color.length)];

  // var randomColor = '#'+Math.floor(Math.random()*16777215).toString(16);
  return randomColor;
}

function gallery() {
  var i = 0;
  setInterval(() => {
    if (window.innerWidth > 800) {
      canvas.innerHTML =
        `
      <div class="rowcoord row1">
      <div class="colcoord  ele0" id="photo1"  style="transform: translateX(-10%) translateY(0); z-index:1;">
            <div class="image">
            <img  class="image__img animate__animated" style="background-color: ${generateRandomColor()};" onmouseover="imageHover(ele0)" src="${photoList[i]}" alt="Coords" />
              <div class="image__overlay image__overlay--primary"  onclick="imageHover('1')"  >
                <div class="image__title">${nameList[i]}</div>
                <p class="image__description">${postList[i]}</p>
                </div>
                </div>
          </div>
          <div class="colcoord  ele1" id="photo3" style="transform: translateX(-10%) translateY(0); z-index:3;">
          <div class="image">
              <img class="image__img animate__animated" style="background-color: ${generateRandomColor()};" src="${photoList[i + 1]}" alt="Coords" />
              <div class="image__overlay image__overlay--primary"  onclick="imageHover('3')" >
                <div class="image__title">${nameList[i + 1]}</div>
                <p class="image__description">${postList[i + 1]}</p>
              </div>
              </div>
          </div>
          <div class="colcoord  ele2" id="photo5"  style="transform: translateX(-10%) translateY(0); z-index:5;">
          <div class="image">
              <img class="image__img animate__animated" style="background-color: ${generateRandomColor()};" src="${photoList[i + 2]}" alt="Coords" />
              <div class="image__overlay image__overlay--primary"  onclick="imageHover('5')" >
              <div class="image__title">${nameList[i + 2]}</div>
                <p class="image__description">${postList[i + 2]}</p>
                </div>
            </div>
            </div>
          <div class="colcoord  ele3" id="photo7" style="transform: translateX(-10%) translateY(0); z-index:7;">
            <div class="image">
            <img class="image__img animate__animated" style="background-color: ${generateRandomColor()};" src="${photoList[i + 3]}" alt="Coords" />
              <div class="image__overlay image__overlay--primary"  onclick="imageHover('7')" >
                <div class="image__title">${nameList[i + 3]}</div>
                <p class="image__description">${postList[i + 3]}</p>
              </div>
            </div>
            </div>
        </div>
        <div class="rowcoord row2">
          <div class="colcoord  ele4" id="photo2" style="transform: translateX(20%) translateY(-25%); z-index:2;">
            <div class="image">
            <img class="image__img animate__animated" style="background-color: ${generateRandomColor()};" src="${photoList[i + 4]}" alt="Coords" />
              <div class="image__overlay image__overlay--primary"  onclick="imageHover('2')" >
              <div class="image__title">${nameList[i + 4]}</div>
                <p class="image__description">${postList[i + 4]}</p>
              </div>
            </div>
          </div>
          <div class="colcoord  ele5" id="photo4" style="transform: translateX(20%) translateY(-25%); z-index:4;">
          <div class="image">
          <img class="image__img animate__animated" style="background-color: ${generateRandomColor()};" src="${photoList[i + 5]}" alt="Coords" />
              <div class="image__overlay image__overlay--primary"  onclick="imageHover('4')" >
                <div class="image__title">${nameList[i + 5]}</div>
                <p class="image__description">${postList[i + 5]}</p>
              </div>
            </div>
            </div>
          <div class="colcoord  ele6" id="photo6" style="transform: translateX(20%) translateY(-25%); z-index:6;">
          <div class="image">
          <img class="image__img animate__animated" style="background-color: ${generateRandomColor()};" src="${photoList[i + 6]}" alt="Coords" />
              <div class="image__overlay image__overlay--primary"  onclick="imageHover('6')" >
              <div class="image__title">${nameList[i + 6]}</div>
                <p class="image__description">${postList[i + 6]}</p>
                </div>
            </div>
          </div>
          <div class="colcoord  ele7" id="photo8" style="transform: translateX(20%) translateY(-25%); z-index:8;">
          <div class="image">
          <img class="image__img animate__animated" style="background-color: ${generateRandomColor()};" src="${photoList[i + 7]}" alt="Coords" />
          <div class="image__overlay image__overlay--primary"  onclick="imageHover('8')" >
          <div class="image__title">${nameList[i + 7]}</div>
          <p class="image__description">${postList[i + 7]}</p>
              </div>
              </div>
          </div>
          </div>
  `
      i = i + 8;
      if (i + 8 >= photoList.length) {
        i = 0;
      }
    }
    else {
      canvas.innerHTML =
        `
      <div class="rowcoord row1">
      <div class="colcoord col1">
      <div class="image">
      <img  class="image__img animate__animated" style="background-color: ${generateRandomColor()};" src="${photoList[i]}" alt="Coords" />
      <div class="image__overlay image__overlay--primary">
      <div class="image__title">${nameList[i]}</div>
          <p class="image__description">${postList[i]}</p>
          </div>
        </div>
      </div>
      <div class="colcoord col2">
        <div class="image">
          <img  class="image__img animate__animated" style="background-color: ${generateRandomColor()};" src="${photoList[i + 1]}" alt="Coords" />
          <div class="image__overlay image__overlay--primary">
          <div class="image__title">${nameList[i + 1]}</div>
          <p class="image__description">${postList[i + 1]}</p>
          </div>
        </div>
      </div>
    </div>
    <div class="rowcoord row2">  
      <div class="colcoord col1">
        <div class="image">
          <img  class="image__img animate__animated" style="background-color: ${generateRandomColor()};" src="${photoList[i + 2]}" alt="Coords" />
          <div class="image__overlay image__overlay--primary">
          <div class="image__title">${nameList[i + 2]}</div>
          <p class="image__description">${postList[i + 2]}</p>
          </div>
        </div>
      </div>
      <div class="colcoord col2">
        <div class="image">
          <img  class="image__img animate__animated" style="background-color: ${generateRandomColor()};" src="${photoList[i + 3]}" alt="Coords" />
          <div class="image__overlay image__overlay--primary">
          <div class="image__title">${nameList[i + 3]}</div>
          <p class="image__description">${postList[i + 3]}</p>
          </div>
        </div>
      </div>
    </div>
`
      i = i + 4;
      if (i + 4 >= photoList.length) {
        i = 0;
      }
    }
  }, 6500);
}

gallery()