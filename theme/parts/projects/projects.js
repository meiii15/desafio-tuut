(function($){
    
    var projectsList = $('.projects-list')[0];
    var description = $('.project-description')[0];
    var title = $('.project-title')[0];
    
    var target = 'http://'  +  window.location.hostname  + '/wp/wp-admin/admin-ajax.php' ;
    
    var projects;

    function showProjectDetails(projectId){
        var currentProject = projects[projectId - 1];
        
        description.innerHTML = currentProject.description;
        title.innerHTML = currentProject.title;
    }

    $.ajax({
        url: target,
        type:'get',
        data: { 'action': 'fetch_projects'}
    }).done(function(data){
        projects = data;
        
        for(let currentProject of data){
            let projectItemList = $('<div>');
            projectItemList.addClass('project-item');
            projectItemList.html(currentProject.title);
            
            projectItemList.click((e)=>{showProjectDetails(currentProject.id)});

            projectsList.append(projectItemList[0]);
        }

        showProjectDetails(1);
    });

})(jQuery);