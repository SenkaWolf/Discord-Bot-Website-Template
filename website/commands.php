<!DOCTYPE html>
<html lang="en">

<head>

	<?php 
		include("includes/header.php");
	?>
    <link href="assets/css/commands.css" rel="stylesheet">

    <!-- Website Title -->
    <title>Aris Bot | Commands</title>
</head>

<body>

    <!-- Navbar -->
	<?php 
		include("includes/navbar-pages.php");
	?>

    <!-- Page Content -->
    <div class="container">
        <section style="margin-top: 9%;">
            <div class="row">
                <div class="col-sm-6 my-1">
                    <h2 class="fw-bold">Aris Commands</h2>
                    <p class="command-descreption">Find all Aris bot commands and information you need fast and easy</p>
                </div>
                <div class="col-sm-6 my-1">
                    <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-4050940490843957" crossorigin="anonymous"></script>
                    <!-- banner -->
                    <ins class="adsbygoogle"
                         style="display:inline-block;width:100%;height:90px"
                         data-ad-client="ca-pub-4050940490843957"
                         data-ad-slot="6770580457"></ins>
                    <script>
                         (adsbygoogle = window.adsbygoogle || []).push({});
                    </script>
                </div>
            </div>
            <hr>
        </section>
        <div class="mt-4"></div>
        <div class="row">
            <div class="col-md-4 my-2">
                <div class="card p-3">
                    <h5>Select Commands Category</h5>
                    <hr />
                    <button onclick="active(this)" id="CategoryBtnAll" class="text-decoration-none btn btn-commandscategory mt-2 my-1 p-2"><i class="fa-solid fa-icons ttt"></i>&nbsp; All Commands</button>
                    
                        <button onclick="active(this)" id="CategoryBtn0" class="text-decoration-none btn btn-commandscategory mt-2 my-1 p-2"><i class='fa-solid fa-gavel ttt'></i>&nbsp; Moderation Commands</button>
                    
                        <button onclick="active(this)" id="CategoryBtn1" class="text-decoration-none btn btn-commandscategory mt-2 my-1 p-2"><i class='fas fa-globe-europe ttt'></i>&nbsp; General Commands</button>
                    
                        <button onclick="active(this)" id="CategoryBtn2" class="text-decoration-none btn btn-commandscategory mt-2 my-1 p-2"><i class='fa-solid fa-ranking-star ttt'></i>&nbsp;&nbsp; Leveling Commands</button>
                    
                        <button onclick="active(this)" id="CategoryBtn3" class="text-decoration-none btn btn-commandscategory mt-2 my-1 p-2"><i class='fas fas fa-crown ttt'></i>&nbsp;&nbsp; Premium Commands</button>
                    
                </div>
            </div>
            <div class="col-md-8 my-2">
                <input type="text" class="w-100 search-box" oninput="search(this.value)" placeholder="Search for commands" />
                
                    
                        <div class="mt-4"></div>
                    
                    <div class="commands-section" id="Category0">
                        
                            
                            <div class="accordion accordion-flush mt-2" id="ban">
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="flush-headingOne">
                                        <button class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#fban">
                                             /ban&nbsp; <span class="command-descreption">- ban a member</span>
                                        </button>
                                    </h2>
                                    <div id="fban" class="accordion-collapse collapse" data-bs-parent="#ban">
                                        <div class="accordion-body">
                                            <span>Usage Examples:</span> <br />
                                            <span class="examples">
                                                
                                                    /ban @memebr<br>
                                                
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        
                            
                            <div class="accordion accordion-flush mt-2" id="kick">
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="flush-headingOne">
                                        <button class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#fkick">
                                             /kick&nbsp; <span class="command-descreption">- kick a member</span>
                                        </button>
                                    </h2>
                                    <div id="fkick" class="accordion-collapse collapse" data-bs-parent="#kick">
                                        <div class="accordion-body">
                                            <span>Usage Examples:</span> <br />
                                            <span class="examples">
                                                
                                                    /kick @memebr
                                                
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        
                            
                            <div class="accordion accordion-flush mt-2" id="mute">
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="flush-headingOne">
                                        <button class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#fmute">
                                             /mute&nbsp; <span class="command-descreption">- mute a member</span>
                                        </button>
                                    </h2>
                                    <div id="fmute" class="accordion-collapse collapse" data-bs-parent="#mute">
                                        <div class="accordion-body">
                                            <span>Usage Examples:</span> <br />
                                            <span class="examples">
                                                
                                                    /mute @member
                                                
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                    </div>
                
                    
                    <div class="commands-section" id="Category1">
                        
                            
                            <div class="accordion accordion-flush mt-2" id="help">
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="flush-headingOne">
                                        <button class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#fhelp">
                                             /help&nbsp; <span class="command-descreption">- Bot&#39;s help menu</span>
                                        </button>
                                    </h2>
                                    <div id="fhelp" class="accordion-collapse collapse" data-bs-parent="#help">
                                        <div class="accordion-body">
                                            <span>Usage Examples:</span> <br />
                                            <span class="examples">
                                                
                                                    /help<br>/help command:ban
                                                
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        
                            
                            <div class="accordion accordion-flush mt-2" id="ping">
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="flush-headingOne">
                                        <button class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#fping">
                                             /ping&nbsp; <span class="command-descreption">- Get bot&#39;s host server status &amp; latency</span>
                                        </button>
                                    </h2>
                                    <div id="fping" class="accordion-collapse collapse" data-bs-parent="#ping">
                                        <div class="accordion-body">
                                            <span>Usage Examples:</span> <br />
                                            <span class="examples">
                                                
                                                    /ping
                                                
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        
                            
                            <div class="accordion accordion-flush mt-2" id="invite">
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="flush-headingOne">
                                        <button class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#finvite">
                                             /invite&nbsp; <span class="command-descreption">- Invite bot to your server</span>
                                        </button>
                                    </h2>
                                    <div id="finvite" class="accordion-collapse collapse" data-bs-parent="#invite">
                                        <div class="accordion-body">
                                            <span>Usage Examples:</span> <br />
                                            <span class="examples">
                                                
                                                    /invite
                                                
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        
                    </div>
                
                    
                    <div class="commands-section" id="Category2">
                        
                            
                            <div class="accordion accordion-flush mt-2" id="leaderboard">
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="flush-headingOne">
                                        <button class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#fleaderboard">
                                             /leaderboard&nbsp; <span class="command-descreption">- Get your servers leaderboards </span>
                                        </button>
                                    </h2>
                                    <div id="fleaderboard" class="accordion-collapse collapse" data-bs-parent="#leaderboard">
                                        <div class="accordion-body">
                                            <span>Usage Examples:</span> <br />
                                            <span class="examples">
                                                
                                                    /leaderboard
                                                
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        
                    </div>
                
                    
                    <div class="commands-section" id="Category3">
                        
                            
                            <div class="accordion accordion-flush mt-2" id="reactionrole">
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="flush-headingOne">
                                        <button class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#freactionrole">
                                            <span class='badge badge-vip rounded-pill'><i class='fas fas fa-crown'></i></span>&nbsp; /reactionrole&nbsp; <span class="command-descreption">- start the setup process for creating a reaction role</span>
                                        </button>
                                    </h2>
                                    <div id="freactionrole" class="accordion-collapse collapse" data-bs-parent="#reactionrole">
                                        <div class="accordion-body">
                                            <span>Usage Examples:</span> <br />
                                            <span class="examples">
                                                
                                                    /reactionrole
                                                
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        
                            
                            <div class="accordion accordion-flush mt-2" id="slowmode">
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="flush-headingOne">
                                        <button class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#fslowmode">
                                            <span class='badge badge-vip rounded-pill'><i class='fas fas fa-crown'></i></span>&nbsp; /slowmode&nbsp; <span class="command-descreption">- add slowmode for a channel</span>
                                        </button>
                                    </h2>
                                    <div id="fslowmode" class="accordion-collapse collapse" data-bs-parent="#slowmode">
                                        <div class="accordion-body">
                                            <span>Usage Examples:</span> <br />
                                            <span class="examples">
                                                
                                                    /slowmode :time
                                                
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        
                    </div>
                
            </div>
        </div>
    </div>

    <!-- footer -->
	<?php 
		include("includes/footer.php");
	?>
    
    <!-- Javascript -->
    <input id="commands" value="[{&#34;title&#34;:&#34;&lt;i class=&#39;fas fa-gift ttt&#39;&gt;&lt;/i&gt;&amp;nbsp; Moderation Commands&#34;,&#34;commands&#34;:[&#34;ban&#34;,&#34;kick&#34;,&#34;mute&#34;]},{&#34;title&#34;:&#34;&lt;i class=&#39;fas fa-globe-europe ttt&#39;&gt;&lt;/i&gt;&amp;nbsp; General Commands&#34;,&#34;commands&#34;:[&#34;help&#34;,&#34;ping&#34;,&#34;invite&#34;]},{&#34;title&#34;:&#34;&lt;i class=&#39;fas fa-hammer-war ttt&#39;&gt;&lt;/i&gt;&amp;nbsp;&amp;nbsp; Leveling Commands&#34;,&#34;commands&#34;:[&#34;leaderboard&#34;]},{&#34;title&#34;:&#34;&lt;i class=&#39;fas fas fa-crown ttt&#39;&gt;&lt;/i&gt;&amp;nbsp; Premium Commands&#34;,&#34;commands&#34;:[&#34;reactionrole&#34;,&#34;slowmode&#34;]}]" hidden />
    <script src="https://unpkg.com/scrollreveal"></script>
    <script src="/js/animation.js"></script>
    <script>
        function active(elm){
            document.getElementById("CategoryBtnAll").classList.remove("active");
            
                document.getElementById("CategoryBtn0").classList.remove("active");
                document.getElementById("Category0").setAttribute("hidden", "");
            
                document.getElementById("CategoryBtn1").classList.remove("active");
                document.getElementById("Category1").setAttribute("hidden", "");
            
                document.getElementById("CategoryBtn2").classList.remove("active");
                document.getElementById("Category2").setAttribute("hidden", "");
            
                document.getElementById("CategoryBtn3").classList.remove("active");
                document.getElementById("Category3").setAttribute("hidden", "");
            
            elm.classList.add("active");
            if(elm.id.replace("CategoryBtn", "") == "All"){
                
                    document.getElementById("Category0").removeAttribute("hidden");
                
                    document.getElementById("Category1").removeAttribute("hidden");
                
                    document.getElementById("Category2").removeAttribute("hidden");
                
                    document.getElementById("Category3").removeAttribute("hidden");
                
            }else{
                document.getElementById("Category" + elm.id.replace("CategoryBtn", "")).removeAttribute("hidden");
            }
        }
        document.getElementById("CategoryBtnAll").click();
        function search(arg){
            let commands = JSON.parse(document.getElementById("commands").value);
            let cmds = [];
            commands.forEach(category => {
                category.commands.forEach(command => {
                    cmds.push(command);
                })
            })
            let existedCmds = cmds.filter(obj => obj.includes(arg.toLowerCase()));
            cmds.forEach(cmd => {
                document.getElementById(cmd).setAttribute("hidden", "");
            })
            existedCmds.forEach(cmd => {
                document.getElementById(cmd).removeAttribute("hidden");
            })
        }
    </script>

    <?php 
        include("includes/javascript.php");
    ?>
</body>

</html>