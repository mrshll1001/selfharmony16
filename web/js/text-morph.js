// arrays for text. Filthy but good


var person0 = "<p>I am a Selfharmer </p>" + "<p>I was never able to explain what the cutting did for me in a way someone would understand:how it was a form of punishment and also of cleansing, how it allowed me to drain everything toxic and spoiled from myself, how it made me feel that my body is truly is mine and no one else. I was completely introverted for about 18 months, not getting out of bed, not seeing a point in anything and most of all, just wanting to not be here anymore. I decided that it would be best for me to tell someone at the university about my illness. This is because I was concerned that if I stayed in the dark place I had been in previously, I would be all on my own, with no one to look out for me, and I could be at risk of harming myself. After telling my friend about my mental health issues, I have been overwhelmed by the amount of support and understanding I have been offered. She saw what was happening and encouraged me to go to the doctors. They couldn't believe that I had kept it to myself for that long, as much as I wanted to explain to my parents what I was going through I couldn’t. The doctors were so so pleased that I had come to see them. They were encouraging and supportive straight away they seemed to get where I was coming from.</p>";

var person1 = "<p>I am a Selfharmer </p>" + "<p>I was never able to explain what the cutting did for me in a way someone would understand:how it was a form of punishment and also of cleansing, how it allowed me to drain everything toxic and spoiled from myself, how it made me feel that my body is truly is mine and no one else. <span class='person-1-blur'>I was completely introverted for about 18 months, not getting out of bed, not seeing a point in anything and most of all, just wanting to not be here anymore. I decided that it would be best for me to tell someone at the university about my illness. This is because I was concerned that</span> if I stayed in the dark place I had been in previously, I would be all on my own, with no one to look out for me, and I could be at risk of harming myself. <span class='person-1-blur'>After telling my friend about my mental health issues, I have been overwhelmed by the amount of support and understanding I have been offered. She saw what was happening and encouraged me to go to the doctors.</span> They couldn't believe that I had kept it to myself for that long, as much as I wanted to explain to my parents what I was going through I couldn’t. The doctors were so so pleased that I had come to see them. They were encouraging and supportive straight away they seemed to get where I was coming from.</p>";

var person2 = "<p>I am a Selfharmer </p>" + "<p>I was never able to explain what the cutting did for me in a way someone would understand:<span class='person-2-blur'>how it was a form of punishment and also of cleansing, how it allowed me to drain everything toxic and spoiled from myself, how it made me feel that my body is truly is mine and no one else.</span> I was completely introverted for about 18 months, not getting out of bed, not seeing a point in anything and most of all, just wanting to not be here anymore. <span class='person-2-blur'>I decided that it would be best for me to tell someone at the university about my illness. This is because I was concerned that if I stayed in the dark place I had been in previously, I would be all on my own, with no one to look out for me, and I could be at risk of harming myself.</span> After telling my friend about my mental health issues, I have been overwhelmed by the amount of support and understanding I have been offered. She saw what was happening and encouraged me to go to the doctors. <span class='person-2-blur'>They couldn't believe that I had kept it to myself for that long, as much as I wanted to explain to my parents what I was going through I couldn’t. The doctors were so so pleased that I had come to see them. They were encouraging and supportive straight away they seemed to get where I was coming from.</span></p>";


$('#person-0-btn').click(function(e){
  $('#content-container').fadeOut('slow', function(){
    $('#content-container').html(person0);
    $('#content-container').fadeIn('slow');
  });



});

$('#person-1-btn').click(function(e){
  $('#content-container').fadeOut('slow', function(){
    $('#content-container').html(person1);
    $('.person-1-blur').addClass('blurry');
    $('#content-container').fadeIn('slow');
  });

});

$('#person-2-btn').click(function(e){
  $('#content-container').fadeOut('slow', function(){
    $('#content-container').html(person2);
    $('.person-2-blur').addClass('blurry');
    $('#content-container').fadeIn('slow');
  });

});
