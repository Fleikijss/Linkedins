let post_template = document.querySelector('.post.template');   // definējam mainīgo post_template, kurš izsauks visi elementus ar klasi post-template.
let content = document.querySelector('.content');               // definējam mainīgo content, kurš izsauks visus elementus ar klasi content
const sec_in_day = 60 * 60 * 24;   

function getPost(count, url = "api.php?api-name=rand_post&count=1") {                               // izsaucam funkciju getPost ar, kur ja count ir = ar 0, tad funkcija to atgriezīs.
    if (count == 0) {
        return;
    }
    request.get(url, function (response) {
        if (!response.posts[0]) {
            return;
        }
             // nodefinēta konstante kas aprēķina cik sekundes ir dienā.

        for (let post of response.posts) {    
// 16 rinda --> definets post_elements un klonēts no post element 17 --rinda --> noņem template klasi
            let post_element = post_template.cloneNode(true);   // definējam post_element mainīgo ar cloneNode, kurš duplicēs šo elementu
            post_element.classList.remove('template');          // noņem jaunajiem ģenerētajiem elementiem klasi
            content.append(post_element);                       // ievieto content post_elementu kāds viņš ir
            let passed_time_in_seconds = Date.now()/1000 - post.created_at;    // date.now cik milisekundes pagājušas no 1970 gada timestamp 
            
            let days_passed = Math.floor(passed_time_in_seconds / sec_in_day) + "d"; 

            post_element.querySelector('.post__author-name').textContent = post.author;
            let image_element = post_element.querySelector('.post__img');
            if (post.image_path) {
                image_element.setAttribute('src', post.image_path);
            } else {
                image_element.remove();
            }
            post_element.querySelector('.follower_nr').textContent = post.fallowers;
            post_element.querySelector('.post__content').innerHTML = post.content;
            post_element.querySelector('.likes_count').textContent = post.likes;
            post_element.querySelector('.comments_count').textContent = post.comment_count;
            post_element.querySelector('.post__created').textContent = days_passed;
        }

        getPost(--count); //    izsaucam funkcija un liekam count mainīgo kuras izpildās -1
    });
}

getPost(5, "api.php?api-name=posts");
/*
const posts_to_load = 2;
getPost(posts_to_load);
*/

let shift_state = false;
const post_form =  document.getElementById('new_post_form');        // nodefinējam konstanti post_form, kurš izsauks elementus ar id = new_post_form

post_form.onsubmit = function (event) {                 // funkcija post_form kura nostrādās 
    event.preventDefault();                             // neļauj veikt normālu darbību
};
post_form.onkeydown = newPost;                          

post_form.onkeyup = function (event) {              // post form funckija uz notikumu, ja 
    if (event.key == 'Shift') {
        shift_state = false;
    }
};



function newPost (event) {
    if (event.key == 'Shift') {
        shift_state = true;
    }
    else if (
        event.key == 'Enter' &&
        !shift_state
    ) {
        const form = document.getElementById('new_post_form');
        request.post(form, function (response) {
            form.querySelector('textarea').value = '';
        });
    }
}


/*
window.onscroll = function (event) {
    console.log(event.target);
    var element = document.querySelector('.last');
    var h = window.innerHeight ||
        document.documentElement.clientHeight ||
        document.body.clientHeight;
    if (element.getBoundingClientRect().top < h) {
        if (loaded >= posts_to_load) {
            console.log("now");
        }
    }
};
/*

document.addEventListener('scroll', function(event)
{
    var element = this.querySelector('.last');
    console.log(element, element.getBoundingClientRect().top);
    if (element.scrollHeight - element.scrollTop === element.clientHeight)
    {
        //alert('scrolled');
    }
});
*/