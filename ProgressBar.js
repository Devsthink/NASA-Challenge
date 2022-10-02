
$(document).ready(function () {

    $('.tab-steps--list li').click(function () {

        $(this).addClass('active');

        var dataStep = $(this).attr('data-step');
        $('.tab-steps--list li').each(function () {
            if ($(this).attr('data-step') > dataStep) {
                $(this).removeClass('active');
                
            } else {
                $(this).addClass('active');
            }
        });
        $(".tab-steps li").removeClass("active");
        $(".tab-steps li").eq($(this).index()).addClass("active");
        $(".tab-steps li").eq($(this).index() + 1).removeClass("active");

    })
})

function changePage(index='-1', actual='-1'){
    if(index != actual){
        document.location.href='/paso'+index+'.html/';
    }
}