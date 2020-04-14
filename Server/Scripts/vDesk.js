let Images = [];
const Length = Images.length;
window.addEventListener("load", () => {
    Images = Array.from(document.getElementsByTagName("img"));
    Images[0].classList.toggle("FadeIn", true);
    window.addEventListener("animationend", Event => {
        if(Event.target.classList.contains("FadeOut")) {
            Event.target.classList.toggle("FadeOut", false);
            (Images[Images.indexOf(Event.target) + 1] || Images[0]).classList.toggle("FadeIn", true);
        } else {
            Event.target.classList.toggle("FadeIn", false);
            Event.target.classList.toggle("FadeOut", true);
        }
    });
});