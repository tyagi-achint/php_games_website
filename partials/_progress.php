<?php 

echo"<style>
.progress {
display: none;
width: 90%;
margin: auto;
padding: 30px 0;
border: 2px solid #444;
}

.progress .topcontainer {
margin: 0 auto;
width: 100%;
max-width: 1000px;
text-align: center;
}

.progress .topcontainer h1 {
text-transform: uppercase;
padding: 6px 0 10px 0;
margin-bottom: 0;
letter-spacing: -1.5px;
color: #444;
font-weight: 400;
}

.progress .topcontainer h1 span {
font-size: 70px;
line-height: 70px;
letter-spacing: -1.4px;
font-weight: 300;
}

.progress .topcontainer p {
margin-bottom: 0;
color: #999;
}

.progress .topcontainer p span {
font-size: 90px;
line-height: 90px;
color: #5E17EB;
}

@media only screen and (max-width: 880px) {


.progress {
display: inherit !important;
}} </style>";

echo"

<div class='progress'>
        <div class='topcontainer' data-uk-scrollspy='{cls:'uk-animation-fade', delay: 300, repeat: true}'>
            <p><span class='fa fa-signal'></span></p>
            <h1><span>Progress</span><br />is coming soon</h1>
            <p>It's almost ready ... honest</p>
        </div>
    </div>

"; ?>