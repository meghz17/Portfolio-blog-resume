var skillsMap1 = {
    "Java": 5, 
    "JavaScript": 4, 
	"PHP": 4,
    "jQuery": 4,
	"Ajax": 3,
	"Apache": 4,
    "Tomcat": 4,
	"REST": 4,
	"MySQL": 4,
	"Hibernate": 4,
    "LAMP": 4,
    "Agile": 4,
};

var skillsMap2 = {
    "C++": 4,
	"C#": 4,
    ".Net": 4,
    "Algorithms": 4,
    "Data Structures": 5,
    "MVC": 4,
    "Entity Framework": 3,
	"HTML5": 5,
    "CSS": 4,
    "Bootstrap": 4,
	"Eclipse": 4,
	"Visual Studio": 4,
};

var app_path = '../';

function skillsLoad1()
{
    var parent = $("#skills-grid-1");
    
    
    for(var skill in skillsMap1)
    {
        
        var count = 0;
        
        
        var container = $('<div class="row"></div>');
        
        container.append('<div class="col-xs-6 col-md-6" style="text-align: left"><label>'+skill+'</label></div>');
        
        var stars = $('<div class="col-xs-6 col-md-6"></div>');
        
        while(count < skillsMap1[skill])
        {
            stars.append('<span class="glyphicon glyphicon-star" aria-hidden="true"></span>');
            count++;
        }
        
        while(count < 5)
        {
            stars.append('<span class="glyphicon glyphicon-star-empty" aria-hidden="true"></span>'); 
            count++;
        }
        
        stars.appendTo(container);
        
        container.appendTo(parent);
    }
}

function skillsLoad2()
{
    var parent = $("#skills-grid-2");
    
    
    for(var skill in skillsMap2)
    {
        
        var count = 0;
        
        
        var container = $('<div class="row"></div>');
        
        container.append('<div class="col-xs-6 col-md-6" style="text-align: left"><label>'+skill+'</label></div>');
        
        var stars = $('<div class="col-xs-6 col-md-6"></div>');
        
        while(count < skillsMap2[skill])
        {
            stars.append('<span class="glyphicon glyphicon-star" aria-hidden="true"></span>');
            count++;
        }
        
        while(count < 5)
        {
            stars.append('<span class="glyphicon glyphicon-star-empty" aria-hidden="true"></span>'); 
            count++;
        }
        
        stars.appendTo(container);
        
        container.appendTo(parent);
    }
}


function changeBackground()
{
    // Pick random background images;
	
	var items = ['background-1.png', 'background-3.png', 'background-5.png', 'background-6.png', 'background-7.png', 'background-8.png', 'background-9.png'];
	
//	var index = Math.floor(Math.random()*items.length);
//    var background1 = items[index];
//    items.splice(index, 1);
//    
//    
//    
//	var index = Math.floor(Math.random()*items.length);
//	var background3 = items[index];
//    items.splice(index, 1);
    
    
	$('#experience-section').css("background", 'url('+app_path+'/images/background-4.png)');
	$('#skills-section').css("background", 'url('+app_path+'/images/background-2.png)');
	$('#projects-section').css("background", 'url('+app_path+'/images/background-10.png)');
}
