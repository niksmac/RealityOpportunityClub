// not animated collapse/expand
function togglePannelStatus(content)
{
    var expand = (content.style.display=="none");
    content.style.display = (expand ? "block" : "none");
    toggleChevronIcon(content);

}

// current animated collapsible panel content
var currentContent = null;

function togglePannelAnimatedStatus(content, interval, step)
{
    // wait for another animated expand/collapse action to end
    if (currentContent==null)
    {
        currentContent = content;
        var expand = (content.style.display=="none");
        if (expand)
            content.style.display = "block";
        var max_height = content.offsetHeight;

        var step_height = step + (expand ? 0 : -max_height);
        toggleChevronIcon(content);
                
        // schedule first animated collapse/expand event
        content.style.height = Math.abs(step_height) + "px";
		
        setTimeout("togglePannelAnimatingStatus(" + interval + "," + step
            + "," + max_height + "," + step_height + ")", interval);
    }
}

function togglePannelAnimatingStatus(interval, step, max_height, step_height)
{
    var step_height_abs = Math.abs(step_height);

    // schedule next animated collapse/expand event
    if (step_height_abs>=step && step_height_abs<=(max_height-step))
    {
        step_height += step;
        currentContent.style.height = Math.abs(step_height) + "px";
        setTimeout("togglePannelAnimatingStatus(" + interval + "," + step
            + "," + max_height + "," + step_height + ")", interval);
    }
    // animated expand/collapse done
    else
    {
        if (step_height_abs<step)
            currentContent.style.display = "none";
        currentContent.style.height = "";
        currentContent = null;
    }
}

// change chevron icon into either collapse or expand
function toggleChevronIcon(content)
{
    var chevron = content.parentNode.firstChild.childNodes[1].childNodes[0];
    var expand = (chevron.src.indexOf("expand.gif")>0);
	
    chevron.src = chevron.src
        .split(expand ? "expand.gif" : "collapse.gif")
        .join(expand ? "collapse.gif" : "expand.gif");
}
