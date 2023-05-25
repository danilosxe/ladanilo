let clickDiv = document.getElementById('header_t1_t1')
let menuOnOff = document.getElementById('menu_nav')



clickDiv.addEventListener('click', function()
    {
        let stylesMenu = window.getComputedStyle(menuOnOff).display
        if (stylesMenu == 'none') {
            menuOnOff.style.display = 'grid'

        }else if(stylesMenu == 'grid' || stylesMenu == '')

        {
            menuOnOff.style.display = 'none'
        }

    }
)