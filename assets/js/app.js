import '../css/app.scss';
import {dropdown} from "bootstrap";

// document.addEventListener('DOMcontentLoaded', listener:()=> {
//     enableDropdowns();
// });

const enableDropdowns = () => {
    const dropdownElementList = document.querySelectorAll('.dropdown-toggle')
    const dropdownList = [dropdownElementList].map(dropdownToggleEl => new bootstrap.Dropdown(dropdownToggleEl))
}