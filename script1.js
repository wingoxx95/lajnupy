document.body.addEventListener("change", () => {
    var maps = document.getElementsByClassName("menu_block_map")[0];
    var sites = document.getElementsByClassName("menu_block_site")[0];
    var agents = document.getElementsByClassName("menu_block_agent")[0];

    function Text(block) {
        if (!(block.children === undefined)) {
            var title = block.children[0];
            for (i = 0; i < block.children[1].childElementCount; i++) {
                var x = block.children[1].children[i].children[0];
                if (x.children[0].checked) {
                    var y = x.children[1].innerHTML;
                    title.innerHTML = y;
                    break;
                }
            }
        }
    }

    maps.addEventListener("change", Text(maps));
    sites.addEventListener("change", Text(sites));
    agents.addEventListener("change", Text(agents));
});