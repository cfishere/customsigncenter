@extends('layouts.default')
@section('content')
       
                <a name="faqtitle">
                </a>
                <h1 style="text-align:left;">
                    Frequently Asked Questions
                </h1>
                <div class="ask_new_question" style="text-align:left;">
                    <div class="ask_new_question_header" style="text-align:left;">
                        <div class="ask_question_back_image_ltr">
                            <span class="ask_new_link" id="ask_question">
                                Ask a new question
                            </span>
                        </div>
                    </div>
                    <script type="text/javascript">
                        function validateForm() {
					var newFaqForm = document.faqForm; 					
					if((newFaqForm.title.value) == '' || (newFaqForm.title.value) == 'Type your question...') {
						alert("Could not send question: Missing question");
						newFaqForm.title.focus();
						return false;
					}else if( newFaqForm.title.value.length < 5 ){
						alert("Could not send question: Question too short");
						newFaqForm.title.focus();
						return false;						
					}
				}
                    </script>
                    <div class="ask" id="ask">
                        <div class="new_faq_form" id="new_question_form" style="display: none;">
                            <form action="/our-company/faq?task=faq.save" id="faqForm" method="post" name="faqForm" onsubmit="return validateForm()">
                                <fieldset>
                                    <textarea id="title" name="title" onblur="if (this.value == '') {this.value = 'Type your question...';}" onfocus="if (this.value == 'Type your question...') {this.value = '';}" rows="3" style="text-align:left;">
                                        Type your question...
                                    </textarea>
                                    <input class="btn btn-primary" onclick="javascript:submitbutton();" type="submit" value="Submit Question">
                                        <a class="btn" id="ask-cancel" onclick="javascript:void(0);" title="Cancel">
                                            Cancel
                                        </a>
                                        <input id="published" name="published" type="hidden" value="0">
                                            <input id="access" name="access" type="hidden" value="1">
                                                <input id="asked_question" name="asked_question" type="hidden" value="1">
                                                    <input name="description" type="hidden" value="">
                                                        <input name="ordering" type="hidden" value="">
                                                            <input name="option" type="hidden" value="com_faqftw">
                                                                <input name="task" type="hidden" value="faq.save">
                                                                    <input name="view" type="hidden" value="faqs">
                                                                        <input name="17f8f7b41344d16bbff8e649d9e7bee4" type="hidden" value="1">
                                                                        </input>
                                                                    </input>
                                                                </input>
                                                            </input>
                                                        </input>
                                                    </input>
                                                </input>
                                            </input>
                                        </input>
                                    </input>
                                </fieldset>
                            </form>
                        </div>
                    </div>
                </div>
                <a name="first">
                </a>
                <a name="what-is-channel-lettering">
                </a>
                <dl class="faq_default ltr">
                    <dt id="what-is-channel-lettering">
                        <div class="letter_a_ltr show" style="display: block;">
                        </div>
                        <div class="letter_q_ltr" style="left: 10px; right: 1090px;">
                        </div>
                        <span class="faq_default_title">
                            What is Channel Lettering
                        </span>
                    </dt>
                    <dd class="faq_answer_default" style="display: block; overflow: hidden;">
                        A popular and powerful sign format, channel letters are three-dimensional, individually shaped sign letters or symbols. Each character is built with aluminum backs and sides or returns and together form a path or channel that houses a specific form of electrical lighting depending upon application. Generally, the lighting is created from custom shaped neon glass tubes or prefabricated fluorescent light fixtures.
                        <br>
                            <br>
                                Today, however, an increasingly popular light source has become LED or "Light Emitting Diode" (more on LED below). The fonts or faces of the characters are either enclosed with a translucent material called acrylic, commonly referred to as plex or constructed from aluminum. Channel Letters offer a unique form of identification with a wide variety of industry standard paint and material colors and can even be made to match any corporate logo or slogan. As a compliment to store or business architecture, channel letters offer high impact recognition and give any business exterior a finished, professional appearance.
                            </br>
                        </br>
                    </dd>
                    <span class="backtotop_default_ltr" style="display: inline;">
                        <a href="javascript:;" onclick="window.open('/index.php?option=com_faqftw&view=faq&tmpl=component&item=1&print=1','win2','status=no,toolbar=no,scrollbars=yes,titlebar=no,menubar=no,resizable=yes,width=640,height=480,directories=no,location=no'); return false;" style="text-decoration: none; background: none;">
                        </a>
                        <a href="#" style="text-decoration: none; background: none;">
                            <img alt="Back to top" src="https://customsigncenter.com/media/com_faqftw/images/back-to-top.png">
                            </img>
                        </a>
                    </span>
                </dl>
                <a name="what-is-an-illuminated-sign-cabinet">
                </a>
                <dl class="faq_default ltr">
                    <dt id="what-is-an-illuminated-sign-cabinet">
                        <div class="letter_a_ltr show" style="display: block;">
                        </div>
                        <div class="letter_q_ltr" style="left: 10px; right: 1090px;">
                        </div>
                        <span class="faq_default_title">
                            What is an Illuminated Sign Cabinet?
                        </span>
                    </dt>
                    <dd class="faq_answer_default" style="display: block; overflow: hidden;">
                        <p>
                            The most common form of sign utilized by retail and commercial business is the illuminated sign cabinet. Constructed with an aluminum back and extrusion (returns for the sides), the sign cabinet houses High Output Lamps which illuminates the face, covering the top on the sign box. Faces are available in several forms:
                            <strong>
                                Flat Face, Flat Pan Face
                            </strong>
                            (the graphics are raised on the face),
                            <strong>
                                Coped Push-Thru Face
                            </strong>
                            (routed aluminum face with dimensional plex letter), or a
                            <strong>
                                Flex Face
                            </strong>
                            (flexible fabric with digitally printed Graphics).
                        </p>
                        <p>
                            Illuminated Sign Cabinets are an excellent way to attract attention with a wide variety of industry standard paint and material colors and can be made to match any logo or design.
                        </p>
                    </dd>
                    <span class="backtotop_default_ltr" style="display: inline;">
                        <a href="javascript:;" onclick="window.open('index.php?option=com_faqftw&view=faq&tmpl=component&item=2&print=1','win2','status=no,toolbar=no,scrollbars=yes,titlebar=no,menubar=no,resizable=yes,width=640,height=480,directories=no,location=no'); return false;" style="text-decoration: none; background: none;">
                        </a>
                        <a href="#" style="text-decoration: none; background: none;">
                            <img alt="Back to top" src="https://customsigncenter.com/media/com_faqftw/images/back-to-top.png">
                            </img>
                        </a>
                    </span>
                </dl>
                <a name="what-is-an-led">
                </a>
                <dl class="faq_default ltr">
                    <dt id="what-is-an-led">
                        <div class="letter_a_ltr show" style="display: block;">
                        </div>
                        <div class="letter_q_ltr" style="left: 10px; right: 1090px;">
                        </div>
                        <span class="faq_default_title">
                            What is an LED?
                        </span>
                    </dt>
                    <dd class="faq_answer_default" style="display: block; overflow: hidden;">
                        <p>
                            An LED ("Light Emiting Diode") is a semiconductor device that emits light when a current is passed through it. LED technology is capable of producing red, green, blue, amber, and other light colors. LED's are highly reliable and consume very little power.
                        </p>
                    </dd>
                    <span class="backtotop_default_ltr" style="display: inline;">
                        <a href="javascript:;" onclick="window.open('/index.php?option=com_faqftw&view=faq&tmpl=component&item=3&print=1','win2','status=no,toolbar=no,scrollbars=yes,titlebar=no,menubar=no,resizable=yes,width=640,height=480,directories=no,location=no'); return false;" style="text-decoration: none; background: none;">
                        </a>
                        <a href="#" style="text-decoration: none; background: none;">
                            <img alt="Back to top" src="https://customsigncenter.com/media/com_faqftw/images/back-to-top.png">
                            </img>
                        </a>
                    </span>
                </dl>
                <a name="what-are-magnetic-signs-used-for">
                </a>
                <dl class="faq_default ltr">
                    <dt id="what-are-magnetic-signs-used-for">
                        <div class="letter_a_ltr show" style="display: block;">
                        </div>
                        <div class="letter_q_ltr" style="left: 10px; right: 1090px;">
                        </div>
                        <span class="faq_default_title">
                            What are Magnetic Signs used For?
                        </span>
                    </dt>
                    <dd class="faq_answer_default" style="display: block; overflow: hidden;">
                        <p>
                            Magnetic signs are a highly durable and cost effective way to promote name recognition with your vehicle. You can personalize them in any way from simple letters and logos on basic shapes to digitally printed graphics cut to custom shapes.
                        </p>
                        <p>
                            An extra feature of Magnetic Signs is that they are easy to apply and remove whenever you want. They are very affordable, simple signs that give effective and professional results. Magnetic signs can offer a quick way to turn your vehicle into a powerful marketing tool!
                        </p>
                    </dd>
                    <span class="backtotop_default_ltr" style="display: inline;">
                        <a href="javascript:;" onclick="window.open('index.php?option=com_faqftw&view=faq&tmpl=component&item=4&print=1','win2','status=no,toolbar=no,scrollbars=yes,titlebar=no,menubar=no,resizable=yes,width=640,height=480,directories=no,location=no'); return false;" style="text-decoration: none; background: none;">
                        </a>
                        <a href="#" style="text-decoration: none; background: none;">
                            <img alt="Back to top" src="https://customsigncenter.com/media/com_faqftw/images/back-to-top.png">
                            </img>
                        </a>
                    </span>
                </dl>
                <a name="what-are-engraved-signs">
                </a>
                <dl class="faq_default ltr">
                    <dt id="what-are-engraved-signs">
                        <div class="letter_a_ltr show" style="display: block;">
                        </div>
                        <div class="letter_q_ltr" style="left: 10px; right: 1090px;">
                        </div>
                        <span class="faq_default_title">
                            What are Engraved Signs?
                        </span>
                    </dt>
                    <dd class="faq_answer_default" style="display: block; overflow: hidden;">
                        <p>
                            Engraved signs offer the added look of class to an otherwise plain sign. They are available in a variety of colors and material choices and can be engraved or reverse engraved depending on the application and desired look.
                        </p>
                        <p>
                            You can also have a decorative beveled edge, a border or a straight edge to frame the sign. There are several simple methods for installation: pressure sensitive adhesive, mounting holes & framing systems.
                        </p>
                    </dd>
                    <span class="backtotop_default_ltr" style="display: inline;">
                        <a href="javascript:;" onclick="window.open('/index.php?option=com_faqftw&view=faq&tmpl=component&item=5&print=1','win2','status=no,toolbar=no,scrollbars=yes,titlebar=no,menubar=no,resizable=yes,width=640,height=480,directories=no,location=no'); return false;" style="text-decoration: none; background: none;">
                        </a>
                        <a href="#" style="text-decoration: none; background: none;">
                            <img alt="Back to top" src="https://customsigncenter.com/media/com_faqftw/images/back-to-top.png">
                            </img>
                        </a>
                    </span>
                </dl>
                <a name="what-are-directory-signs-used-for">
                </a>
                <dl class="faq_default ltr">
                    <dt id="what-are-directory-signs-used-for">
                        <div class="letter_a_ltr show" style="display: block;">
                        </div>
                        <div class="letter_q_ltr" style="left: 10px; right: 1090px;">
                        </div>
                        <span class="faq_default_title">
                            What are Directory Signs used for?
                        </span>
                    </dt>
                    <dd class="faq_answer_default" style="display: block; overflow: hidden;">
                        <p>
                            Directory signs are the integral part in any way-finding system. They provide aid and convenience to those who are finding there way through any building. Not only are they helpful but can also be produced to any custom specifications.
                        </p>
                    </dd>
                    <span class="backtotop_default_ltr" style="display: inline;">
                        <a href="javascript:;" onclick="window.open('index.php?option=com_faqftw&view=faq&tmpl=component&item=6&print=1','win2','status=no,toolbar=no,scrollbars=yes,titlebar=no,menubar=no,resizable=yes,width=640,height=480,directories=no,location=no'); return false;" style="text-decoration: none; background: none;">
                        </a>
                        <a href="#" style="text-decoration: none; background: none;">
                            <img alt="Back to top" src="https://customsigncenter.com/media/com_faqftw/images/back-to-top.png">
                            </img>
                        </a>
                    </span>
                </dl>
                <a name="what-are-ada-signs">
                </a>
                <dl class="faq_default ltr">
                    <dt id="what-are-ada-signs">
                        <div class="letter_a_ltr show" style="display: block;">
                        </div>
                        <div class="letter_q_ltr" style="left: 10px; right: 1090px;">
                        </div>
                        <span class="faq_default_title">
                            What are ADA Signs?
                        </span>
                    </dt>
                    <dd class="faq_answer_default" style="display: block; overflow: hidden;">
                        <p>
                            Signage in the public areas of most buildings, are subject to compliance with federal, state and local code requirements. They require the use of certain symbols, messages, graphic standards and Braille characters.
                        </p>
                        <p>
                            These ADA (Americans with Disabilities Act) signs are available in a variety of standard colors and can also be adapted to any custom color scheme or design. Our ADA signs are made for easy installation and they are perfect for many interior applications.
                        </p>
                    </dd>
                    <span class="backtotop_default_ltr" style="display: inline;">
                        <a href="javascript:;" onclick="window.open('/index.php?option=com_faqftw&view=faq&tmpl=component&item=7&print=1','win2','status=no,toolbar=no,scrollbars=yes,titlebar=no,menubar=no,resizable=yes,width=640,height=480,directories=no,location=no'); return false;" style="text-decoration: none; background: none;">
                        </a>
                        <a href="#" style="text-decoration: none; background: none;">
                            <img alt="Back to top" src="https://customsigncenter.com/media/com_faqftw/images/back-to-top.png">
                            </img>
                        </a>
                    </span>
                </dl>
                <a name="what-are-interior-acrylic-letters">
                </a>
                <dl class="faq_default ltr">
                    <dt id="what-are-interior-acrylic-letters">
                        <div class="letter_a_ltr show" style="display: block;">
                        </div>
                        <div class="letter_q_ltr" style="left: 10px; right: 1090px;">
                        </div>
                        <span class="faq_default_title">
                            What are Interior Acrylic Letters?
                        </span>
                    </dt>
                    <dd class="faq_answer_default" style="display: block; overflow: hidden;">
                        <p>
                            Cut acrylic letters and graphics are decorative and durable. Acrylic comes in a wide variety of colors and is easy to cut and customize.
                        </p>
                        <p>
                            It’s smooth, glossy surface delivers a clean professional look, suitable for corporate identification. They are idea for all indoor mounting applications. Acrylic may also be decorated with vinyl graphics for extra accents and are receptive to UV ink for full color printing.
                        </p>
                    </dd>
                    <span class="backtotop_default_ltr" style="display: inline;">
                        <a href="javascript:;" onclick="window.open('index.php?option=com_faqftw&view=faq&tmpl=component&item=9&print=1','win2','status=no,toolbar=no,scrollbars=yes,titlebar=no,menubar=no,resizable=yes,width=640,height=480,directories=no,location=no'); return false;" style="text-decoration: none; background: none;">
                        </a>
                        <a href="#" style="text-decoration: none; background: none;">
                            <img alt="Back to top" src="https://customsigncenter.com/media/com_faqftw/images/back-to-top.png">
                            </img>
                        </a>
                    </span>
                </dl>
                <a name="how-are-interior-foam-letters-made-and-what-are-they-used-for">
                </a>
                <dl class="faq_default ltr">
                    <dt id="how-are-interior-foam-letters-made-and-what-are-they-used-for">
                        <div class="letter_a_ltr show" style="display: block;">
                        </div>
                        <div class="letter_q_ltr" style="left: 10px; right: 1090px;">
                        </div>
                        <span class="faq_default_title">
                            How are Interior Foam Letters made and what are they used for?
                        </span>
                    </dt>
                    <dd class="faq_answer_default" style="display: block; overflow: hidden;">
                        <p>
                            Foam core board is made by adhering two sheets of paper to both sides of a foam core. Foam core board is lightweight yet sturdy. It is ideal for all indoor mounting applications. Easy to cut and customize, foam board is clay-coated for an extra smooth surface. Foam board comes in a variety of colors and is well suited for trade show applications and many other indoor uses. Foam board accepts in-jet and full color printing very well.
                        </p>
                        <p>
                            Elegant metal signs and letters can cost a bundle. Now there is a lightweight, less expensive, easily crafted alternative. Metal laminate letters deliver the same impact and appeal as metal, but in a durable, versatile foam-centered product. This is the ideal material for decorative letters and logos often seen in hotels, banks and office buildings. It can be sawed or routed, and is to craft than solid metal. It even maintains its appearance better - the surface is anodized aluminum, which will not rust, fade, or tarnish. The back side is high-quality polystyrene.
                        </p>
                        <p>
                            Foam letters and logos are available in a wide assortment of type styles and our foam letters will allow dimensional sign letters to be added to your building signage for much less than many other lettering materials. This product is commonly used to present the nice look of three-dimensional sign letters with some “depth” to get 3-D effects without the higher cost of some of our other sign letter materials, like our high-quality metal letters.
                        </p>
                    </dd>
                    <span class="backtotop_default_ltr" style="display: inline;">
                        <a href="javascript:;" onclick="window.open('/index.php?option=com_faqftw&view=faq&tmpl=component&item=10&print=1','win2','status=no,toolbar=no,scrollbars=yes,titlebar=no,menubar=no,resizable=yes,width=640,height=480,directories=no,location=no'); return false;" style="text-decoration: none; background: none;">
                        </a>
                        <a href="#" style="text-decoration: none; background: none;">
                            <img alt="Back to top" src="https://customsigncenter.com/media/com_faqftw/images/back-to-top.png">
                            </img>
                        </a>
                    </span>
                </dl>
                <a name="what-are-exterior-pvc-letters">
                </a>
                <dl class="faq_default ltr">
                    <dt id="what-are-exterior-pvc-letters">
                        <div class="letter_a_ltr show" style="display: block;">
                        </div>
                        <div class="letter_q_ltr" style="left: 10px; right: 1090px;">
                        </div>
                        <span class="faq_default_title">
                            What are Exterior PVC Letters?
                        </span>
                    </dt>
                    <dd class="faq_answer_default" style="display: block; overflow: hidden;">
                        <p>
                            From PVC materials, we can cut out high-quality sign letters and logos. These custom PVC sign letter products may be produced with no painting or surface laminate (using standard PVC available in stock colors), or the PVC can be painted (any standard paint color or matched to your specified color mix), or the PVC can be cut to shape and digitally printed graphics may be applied.
                        </p>
                    </dd>
                    <span class="backtotop_default_ltr" style="display: inline;">
                        <a href="javascript:;" onclick="window.open('index.php?option=com_faqftw&view=faq&tmpl=component&item=11&print=1','win2','status=no,toolbar=no,scrollbars=yes,titlebar=no,menubar=no,resizable=yes,width=640,height=480,directories=no,location=no'); return false;" style="text-decoration: none; background: none;">
                        </a>
                        <a href="#" style="text-decoration: none; background: none;">
                            <img alt="Back to top" src="https://customsigncenter.com/media/com_faqftw/images/back-to-top.png">
                            </img>
                        </a>
                    </span>
                </dl>
                <a name="what-are-the-benefits-of-using-hdf-letters">
                </a>
                <dl class="faq_default ltr">
                    <dt id="what-are-the-benefits-of-using-hdf-letters">
                        <div class="letter_a_ltr show" style="display: block;">
                        </div>
                        <div class="letter_q_ltr" style="left: 10px; right: 1090px;">
                        </div>
                        <span class="faq_default_title">
                            What are the benefits of using HDF Letters?
                        </span>
                    </dt>
                    <dd class="faq_answer_default" style="display: block; overflow: hidden;">
                        <p>
                            HDF Letters replaced wood letters years ago as the choice for low-budget signs, since HDF is suitable for exterior use. Some of the benefits of using HDF is that is 100% waterproof, it is not affected by temperature, and it will not split, crack, rot or decompose.
                        </p>
                    </dd>
                    <span class="backtotop_default_ltr" style="display: inline;">
                        <a href="javascript:;" onclick="window.open('/index.php?option=com_faqftw&view=faq&tmpl=component&item=12&print=1','win2','status=no,toolbar=no,scrollbars=yes,titlebar=no,menubar=no,resizable=yes,width=640,height=480,directories=no,location=no'); return false;" style="text-decoration: none; background: none;">
                        </a>
                        <a href="#" style="text-decoration: none; background: none;">
                            <img alt="Back to top" src="https://customsigncenter.com/media/com_faqftw/images/back-to-top.png">
                            </img>
                        </a>
                    </span>
                </dl>
                <a name="what-types-of-awnings-are-there">
                </a>
                <dl class="faq_default ltr">
                    <dt id="what-types-of-awnings-are-there">
                        <div class="letter_a_ltr show" style="display: block;">
                        </div>
                        <div class="letter_q_ltr" style="left: 10px; right: 1090px;">
                        </div>
                        <span class="faq_default_title">
                            What types of Awnings are there?
                        </span>
                    </dt>
                    <dd class="faq_answer_default" style="display: block; overflow: hidden;">
                        <p>
                            Digitally Printed Awning material is a classic backlit substrate compatible with all solvent-base digital printers. The universal topcoat and 20% translucency makes it ideal for backlit signs, banners and billboards. The high quality finish is formulated to assure you of consistent image quality with optimal color reproduction. (Available in any color combination.)
                        </p>
                        <h3>
                            Eradicated Backlit Awning
                        </h3>
                        <p>
                            This material is ideal for backlit awnings and signage with single background colors. Designs, logos and copy may be added through eradication, inlaying additional colors where desired. Now in a design for everyday signage, usage, usage is intended where the requirement is for medium-term durability. Available in a range or popular colors, the awning and sign faces can be decorated with translucent vinyl or digitally printed backlit material. The exposed white background, in areas of eradication, stays white as a result of high quality pigments and additives that provide resistance to UV, heat degradation, and microbial protection. The 20 x 14 high strength polyester scrim embedded in the cast PVC gives strength for easy tensioning and avoids sagging. The special combination of materials has excellent light diffusion properties to increase visibility of the graphic while hiding structural components. Contact a sales associate for available colors.
                        </p>
                        <h3>
                            Waterproof Awnings with Vinyl Graphics
                        </h3>
                        <p>
                            We call it waterproof and we mean it!  Waterproof awning material is the product of an impressive history and technological pioneering in flexible sign and awning materials.  Waterproof awning material is a revolutionary material which has the luxurious look and feel of a textured fabric, with all the weather-resistant properties of a high performance vinyl polymer substrate.
                        </p>
                        <h3>
                            Benefits Of Using This Material
                        </h3>
                        <p>
                            It looks and feels like a woven fabric without the weaknesses of one - Waterproof, not just water resistant - Waterproof awning material is also flame resistant; meets CA Fire Marshall, ASTM E 84, NFPA 701, UL48 & UI94 - Digitally printable - Resists sagging better than woven acrylic - Resists stains and fungus, and easy to clean.
    Contact a sales associate for available colors.
                        </p>
                    </dd>
                    <span class="backtotop_default_ltr" style="display: inline;">
                        <a href="javascript:;" onclick="window.open('index.php?option=com_faqftw&view=faq&tmpl=component&item=13&print=1','win2','status=no,toolbar=no,scrollbars=yes,titlebar=no,menubar=no,resizable=yes,width=640,height=480,directories=no,location=no'); return false;" style="text-decoration: none; background: none;">
                        </a>
                        <a href="#" style="text-decoration: none; background: none;">
                            <img alt="Back to top" src="https://customsigncenter.com/media/com_faqftw/images/back-to-top.png">
                            </img>
                        </a>
                    </span>
                </dl>
                <a name="why-vehicle-graphics-wraps-lettering">
                </a>
                <dl class="faq_default ltr">
                    <dt id="why-vehicle-graphics-wraps-lettering">
                        <div class="letter_a_ltr show" style="display: block;">
                        </div>
                        <div class="letter_q_ltr" style="left: 10px; right: 1090px;">
                        </div>
                        <span class="faq_default_title">
                            Why Vehicle Graphics, Wraps, & Lettering?
                        </span>
                    </dt>
                    <dd class="faq_answer_default" style="display: block; overflow: hidden;">
                        <p>
                            Vehicle Graphics are the most effective and best bang for your advertising buck. They are in view every day, communicating your message and promoting your brand. They work great for almost any kind of company or organization, offering the lowest cost per impression of any advertising medium.
                        </p>
                        <p>
                            The fastest growing trend in advertising and marketing is the idea of mobile billboards via vehicle graphics. Your company vehicle will look awesome as it promotes your product, service or company like never before. Vehicle graphics are a dazzling way to make a huge impact on your market and community - and to get noticed!
                        </p>
                    </dd>
                    <span class="backtotop_default_ltr" style="display: inline;">
                        <a href="javascript:;" onclick="window.open('/index.php?option=com_faqftw&view=faq&tmpl=component&item=14&print=1','win2','status=no,toolbar=no,scrollbars=yes,titlebar=no,menubar=no,resizable=yes,width=640,height=480,directories=no,location=no'); return false;" style="text-decoration: none; background: none;">
                        </a>
                        <a href="#" style="text-decoration: none; background: none;">
                            <img alt="Back to top" src="https://customsigncenter.com/media/com_faqftw/images/back-to-top.png">
                            </img>
                        </a>
                    </span>
                </dl>
                <a name="do-you-do-jobs-for-special-projects">
                </a>
                <dl class="faq_default ltr">
                    <dt id="do-you-do-jobs-for-special-projects">
                        <div class="letter_a_ltr show" style="display: block;">
                        </div>
                        <div class="letter_q_ltr" style="left: 10px; right: 1090px;">
                        </div>
                        <span class="faq_default_title">
                            Do you do jobs for special projects?
                        </span>
                    </dt>
                    <dd class="faq_answer_default" style="display: block; overflow: hidden;">
                        <p>
                            Wall Murals, digital collages, posters, fence meshing, stage backdrops, concert backdrops, window blinds, etc. - whatever you can dream, we can make a reality. Need a creative mind to help you along? Our-in-house designers are available to assist you from concept through completion.
                        </p>
                        <p>
                            If you only remember one thing about 4signs.com’s digital imaging capabilities, remember this: We’ll print anything on anything. We print sharper, bigger, brighter and louder than any other printer in the business!
                        </p>
                    </dd>
                    <span class="backtotop_default_ltr" style="display: inline;">
                        <a href="javascript:;" onclick="window.open('index.php?option=com_faqftw&view=faq&tmpl=component&item=15&print=1','win2','status=no,toolbar=no,scrollbars=yes,titlebar=no,menubar=no,resizable=yes,width=640,height=480,directories=no,location=no'); return false;" style="text-decoration: none; background: none;">
                        </a>
                        <a href="#" style="text-decoration: none; background: none;">
                            <img alt="Back to top" src="https://customsigncenter.com/media/com_faqftw/images/back-to-top.png">
                            </img>
                        </a>
                    </span>
                </dl>
                <a name="what-are-the-uses-for-pylon-signs">
                </a>
                <dl class="faq_default ltr">
                    <dt id="what-are-the-uses-for-pylon-signs">
                        <div class="letter_a_ltr show" style="display: block;">
                        </div>
                        <div class="letter_q_ltr" style="left: 10px; right: 1090px;">
                        </div>
                        <span class="faq_default_title">
                            What are the uses for Pylon Signs?
                        </span>
                    </dt>
                    <dd class="faq_answer_default" style="display: block; overflow: hidden;">
                        <p>
                            Perhaps the most common type of commercial outdoor signage is a Pylon Sign. Designed by utilizing a single, double or multi-pole structure, your sign can reach heights visible from long distances.
                        </p>
                        <p>
                            The effectiveness of the sign is dependent on it’s design. Pylon Signs do more than provide another place for a sign, they become a part of the architectural personality of a location and have the capability to transform your site from just another building into a landmark people recognize and are attracted to.
                        </p>
                    </dd>
                    <span class="backtotop_default_ltr" style="display: inline;">
                        <a href="javascript:;" onclick="window.open('/index.php?option=com_faqftw&view=faq&tmpl=component&item=16&print=1','win2','status=no,toolbar=no,scrollbars=yes,titlebar=no,menubar=no,resizable=yes,width=640,height=480,directories=no,location=no'); return false;" style="text-decoration: none; background: none;">
                        </a>
                        <a href="#" style="text-decoration: none; background: none;">
                            <img alt="Back to top" src="https://customsigncenter.com/media/com_faqftw/images/back-to-top.png">
                            </img>
                        </a>
                    </span>
                </dl>
                <a name="what-are-the-uses-for-neon-and-how-is-it-made">
                </a>
                <dl class="faq_default ltr">
                    <dt id="what-are-the-uses-for-neon-and-how-is-it-made">
                        <div class="letter_a_ltr show" style="display: block;">
                        </div>
                        <div class="letter_q_ltr" style="left: 10px; right: 1090px;">
                        </div>
                        <span class="faq_default_title">
                            What are the uses for Neon and how is it made?
                        </span>
                    </dt>
                    <dd class="faq_answer_default" style="display: block; overflow: hidden;">
                        <p>
                            Neon is an excellent choice for restaurants and retail outlets where consumer attention is a must. Beyond its uses as signage, it also serves as an attractive accent to architecture, building borders, cabinet under-lighting, etc. Perhaps the greatest example of the power of neon would be the world famous city of Las Vegas: where neon rises above the sphere of signage to a full-blown spectacle of colorful lights and wild amazement.
                        </p>
                        <p>
                            Take neon one step further by making it “flash” and create a sign with more vigor, intensity, scope and vitality than any other sign medium. Neon Signs have been around since the late 19th century and it shows no sign of diminishing as a creative, versatile and durable sign solution. Unlike many other kinds of signs, neon is still largely a handcrafted product and very few companies know how to produce it. Glass tubes of variable thickness are heated over a super-hot flame and are hand bent to shape by a neon artisan. When cooled, they are filled with neon gas. Other elements are introduced to the mix to create an array of colors. An electric current is then passed through the tube, causing the neon to glow brilliantly.
                        </p>
                        <p>
                            With our own in-house neon facility, we manufacture “miles” of neon. Using the most cutting-edge techniques, we produce long lasting productions and custom runs while making sure all neon and transformer installations are UL approved. We comply with the UL 2161 rules and regulations as stated by the Underwriters Laboratories.  Learn more at our
                            <a href="/sign-products/custom-neon-signs-led" target="_self" title="Learn More about Neon Signs and Custom LED Signs">
                                LED and Neon Signs
                            </a>
                            page.
                        </p>
                    </dd>
                    <span class="backtotop_default_ltr" style="display: inline;">
                        <a href="javascript:;" onclick="window.open('index.php?option=com_faqftw&view=faq&tmpl=component&item=17&print=1','win2','status=no,toolbar=no,scrollbars=yes,titlebar=no,menubar=no,resizable=yes,width=640,height=480,directories=no,location=no'); return false;" style="text-decoration: none; background: none;">
                        </a>
                        <a href="#" style="text-decoration: none; background: none;">
                            <img alt="Back to top" src="https://customsigncenter.com/media/com_faqftw/images/back-to-top.png">
                            </img>
                        </a>
                    </span>
                </dl>
                <a name="what-is-a-fascia-sign">
                </a>
                <dl class="faq_default ltr">
                    <dt id="what-is-a-fascia-sign">
                        <div class="letter_a_ltr show" style="display: block;">
                        </div>
                        <div class="letter_q_ltr" style="left: 10px; right: 1090px;">
                        </div>
                        <span class="faq_default_title">
                            What is a Fascia Sign?
                        </span>
                    </dt>
                    <dd class="faq_answer_default" style="display: block; overflow: hidden;">
                        A Fascia sign is an sign located on the verticle section of the building just below the roof line. This area is ususally large and clearly visible to potential customers. Your Fascia Sign could be channel letters, a Neon Sign, a Cabinet Sign or any sign that can be afixed to that area of your building.
                    </dd>
                    <span class="backtotop_default_ltr" style="display: inline;">
                        <a href="javascript:;" onclick="window.open('/index.php?option=com_faqftw&view=faq&tmpl=component&item=26&print=1','win2','status=no,toolbar=no,scrollbars=yes,titlebar=no,menubar=no,resizable=yes,width=640,height=480,directories=no,location=no'); return false;" style="text-decoration: none; background: none;">
                        </a>
                        <a href="#" style="text-decoration: none; background: none;">
                            <img alt="Back to top" src="https://customsigncenter.com/media/com_faqftw/images/back-to-top.png">
                            </img>
                        </a>
                    </span>
                </dl>
                <a name="what-is-a-marquee-sign">
                </a>
                <dl class="faq_default ltr">
                    <dt id="what-is-a-marquee-sign">
                        <div class="letter_a_ltr show" style="display: block;">
                        </div>
                        <div class="letter_q_ltr" style="left: 10px; right: 1090px;">
                        </div>
                        <span class="faq_default_title">
                            What is a marquee Sign?
                        </span>
                    </dt>
                    <dd class="faq_answer_default" style="display: block; overflow: hidden;">
                        A marquee sign is usually placed over the entrance of a hotel or theater. They display the name of the establishment.  In the case of a theater the name of the movie or play as well as the actors' names will be displayed. The changeable letters are plastic and are easily updated to the new event, movie or play at the establishment. These signs are usually backlit.
                    </dd>
                    <span class="backtotop_default_ltr" style="display: inline;">
                        <a href="javascript:;" onclick="window.open('/index.php?option=com_faqftw&view=faq&tmpl=component&item=27&print=1','win2','status=no,toolbar=no,scrollbars=yes,titlebar=no,menubar=no,resizable=yes,width=640,height=480,directories=no,location=no'); return false;" style="text-decoration: none; background: none;">
                        </a>
                        <a href="#" style="text-decoration: none; background: none;">
                            <img alt="Back to top" src="https://customsigncenter.com/media/com_faqftw/images/back-to-top.png">
                            </img>
                        </a>
                    </span>
                </dl>
                <a name="what-is-a-monument-sign">
                </a>
                <dl class="faq_default ltr">
                    <dt id="what-is-a-monument-sign">
                        <div class="letter_a_ltr show" style="display: block;">
                        </div>
                        <div class="letter_q_ltr" style="left: 10px; right: 1090px;">
                        </div>
                        <span class="faq_default_title">
                            What is a Monument Sign
                        </span>
                    </dt>
                    <dd class="faq_answer_default" style="display: block; overflow: hidden;">
                        Monument signs, also called ground or architectural signs are freestanding signs that use cement block, brick or other masonry elements in their construction and are set low to the ground. Many are constructed with stone or stucco but can also be made of metal. Some have side pillars or posts. They are often lighted. They are constructed to complement the architecture of the building while putting the business name front and center.
                        <br>
                            <br>
                                <span style="color: #222222; font-family: Roboto, arial, sans-serif; font-size: 16px; background-color: #ffffff;">
                                </span>
                            </br>
                        </br>
                    </dd>
                    <span class="backtotop_default_ltr" style="display: inline;">
                        <a href="javascript:;" onclick="window.open('index.php?option=com_faqftw&view=faq&tmpl=component&item=28&print=1','win2','status=no,toolbar=no,scrollbars=yes,titlebar=no,menubar=no,resizable=yes,width=640,height=480,directories=no,location=no'); return false;" style="text-decoration: none; background: none;">
                        </a>
                        <a href="#" style="text-decoration: none; background: none;">
                            <img alt="Back to top" src="https://customsigncenter.com/media/com_faqftw/images/back-to-top.png">
                            </img>
                        </a>
                    </span>
                </dl>
                <a name="how-long-does-it-take-to-finish-a-custom-banner">
                </a>
                <dl class="faq_default ltr">
                    <dt id="how-long-does-it-take-to-finish-a-custom-banner">
                        <div class="letter_a_ltr show" style="display: block;">
                        </div>
                        <div class="letter_q_ltr" style="left: 10px; right: 1090px;">
                        </div>
                        <span class="faq_default_title">
                            How long does it take to finish a custom banner?
                        </span>
                    </dt>
                    <dd class="faq_answer_default" style="display: block; overflow: hidden;">
                        <p>
                            Our custom banners are printed on a digital printer, so there is no drying time necessary. They take very little time to print. Once the order has been submitted it is sent to the production area. They pull down the files that our Customer Care team uploads. The file is sent to the digital printer and the 13Oz scrim vinyl is placed in the printer. Once it's printed it's ready for grommets and hemming. Our grommets are brass, so they won't rust. Hems are done only upon request.
                        </p>
                    </dd>
                    <span class="backtotop_default_ltr" style="display: inline;">
                        <a href="javascript:;" onclick="window.open('/index.php?option=com_faqftw&view=faq&tmpl=component&item=29&print=1','win2','status=no,toolbar=no,scrollbars=yes,titlebar=no,menubar=no,resizable=yes,width=640,height=480,directories=no,location=no'); return false;" style="text-decoration: none; background: none;">
                        </a>
                        <a href="#" style="text-decoration: none; background: none;">
                            <img alt="Back to top" src="https://customsigncenter.com/media/com_faqftw/images/back-to-top.png">
                            </img>
                        </a>
                    </span>
                </dl>
                <a name="what-is-the-turn-around-for-an-order">
                </a>
                <dl class="faq_default ltr">
                    <dt id="what-is-the-turn-around-for-an-order">
                        <div class="letter_a_ltr show" style="display: block;">
                        </div>
                        <div class="letter_q_ltr" style="left: 10px; right: 1090px;">
                        </div>
                        <span class="faq_default_title">
                            what is the turn around for an order
                        </span>
                    </dt>
                    <dd class="faq_answer_default" style="display: block; overflow: hidden;">
                        Our turnaround times are dependent upon the type of product and amount of product ordered. Usually our orders are ready for pick-up, or to be shipped, in 2-3 business days. Sometimes quicker if the order is a stock rider or frame that we have in stock. We strive to get your order to you on time and when it's ready to ship we will share the tracking information with you so you can follow your package to its destination.
                    </dd>
                    <span class="backtotop_default_ltr" style="display: inline;">
                        <a href="javascript:;" onclick="window.open('/index.php?option=com_faqftw&view=faq&tmpl=component&item=30&print=1','win2','status=no,toolbar=no,scrollbars=yes,titlebar=no,menubar=no,resizable=yes,width=640,height=480,directories=no,location=no'); return false;" style="text-decoration: none; background: none;">
                        </a>
                        <a href="#" style="text-decoration: none; background: none;">
                            <img alt="Back to top" src="https://customsigncenter.com/media/com_faqftw/images/back-to-top.png">
                            </img>
                        </a>
                    </span>
                </dl>
                <a name="how-thick-are-the-real-estate-rider-signs">
                </a>
                <dl class="faq_default ltr">
                    <dt id="how-thick-are-the-real-estate-rider-signs">
                        <div class="letter_a_ltr show" style="display: block;">
                        </div>
                        <div class="letter_q_ltr" style="left: 10px; right: 1090px;">
                        </div>
                        <span class="faq_default_title">
                            How thick are the real estate rider signs?
                        </span>
                    </dt>
                    <dd class="faq_answer_default" style="display: block; overflow: hidden;">
                        Our Real Estate riders are constructed of rugged 1/4" PVC and come in 2 sizes. 6" x 24" and 6" x 30".
                    </dd>
                    <span class="backtotop_default_ltr" style="display: inline;">
                        <a href="javascript:;" onclick="window.open('index.php?option=com_faqftw&view=faq&tmpl=component&item=32&print=1','win2','status=no,toolbar=no,scrollbars=yes,titlebar=no,menubar=no,resizable=yes,width=640,height=480,directories=no,location=no'); return false;" style="text-decoration: none; background: none;">
                        </a>
                        <a href="#" style="text-decoration: none; background: none;">
                            <img alt="Back to top" src="https://customsigncenter.com/media/com_faqftw/images/back-to-top.png">
                            </img>
                        </a>
                    </span>
                </dl>
                <a name="do-you-have-open-house-flags">
                </a>
                <dl class="faq_default ltr">
                    <dt id="do-you-have-open-house-flags">
                        <div class="letter_a_ltr show" style="display: block;">
                        </div>
                        <div class="letter_q_ltr" style="left: 10px; right: 1090px;">
                        </div>
                        <span class="faq_default_title">
                            Do you have open house flags
                        </span>
                    </dt>
                    <dd class="faq_answer_default" style="display: block; overflow: hidden;">
                        We do have open house flags but they are custom items and must be designed through our Super Sign Showroom. Please call 614-279-6035 or stop by at 400 N. Wilson Road to get your design started.
                    </dd>
                    <span class="backtotop_default_ltr" style="display: inline;">
                        <a href="javascript:;" onclick="window.open('/index.php?option=com_faqftw&view=faq&tmpl=component&item=103&print=1','win2','status=no,toolbar=no,scrollbars=yes,titlebar=no,menubar=no,resizable=yes,width=640,height=480,directories=no,location=no'); return false;" style="text-decoration: none; background: none;">
                        </a>
                        <a href="#" style="text-decoration: none; background: none;">
                            <img alt="Back to top" src="https://customsigncenter.com/media/com_faqftw/images/back-to-top.png">
                            </img>
                        </a>
                    </span>
                </dl>
                <a name="how-long-does-it-take-to-print-yard-signs">
                </a>
                <dl class="faq_default ltr">
                    <dt id="how-long-does-it-take-to-print-yard-signs">
                        <div class="letter_a_ltr show" style="display: block;">
                        </div>
                        <div class="letter_q_ltr" style="left: 10px; right: 1090px;">
                        </div>
                        <span class="faq_default_title">
                            how long does it take to print yard signs
                        </span>
                    </dt>
                    <dd class="faq_answer_default" style="display: block; overflow: hidden;">
                        We print directly on the coroplast with UV resistant inks. Then the coroplast is cut to size. The process takes a few hours to complete. However, when an order is submitted it will be in the queue to be processed and printed and that can take a day or two. Total turnaround time is 2-3 days.
                    </dd>
                    <span class="backtotop_default_ltr" style="display: inline;">
                        <a href="javascript:;" onclick="window.open('index.php?option=com_faqftw&view=faq&tmpl=component&item=120&print=1','win2','status=no,toolbar=no,scrollbars=yes,titlebar=no,menubar=no,resizable=yes,width=640,height=480,directories=no,location=no'); return false;" style="text-decoration: none; background: none;">
                        </a>
                        <a href="#" style="text-decoration: none; background: none;">
                            <img alt="Back to top" src="https://customsigncenter.com/media/com_faqftw/images/back-to-top.png">
                            </img>
                        </a>
                    </span>
                </dl>
                <a name="will-you-review-my-artwork-before-printing-my-product">
                </a>
                <dl class="faq_default ltr">
                    <dt id="will-you-review-my-artwork-before-printing-my-product">
                        <div class="letter_a_ltr show" style="display: block;">
                        </div>
                        <div class="letter_q_ltr" style="left: 10px; right: 1090px;">
                        </div>
                        <span class="faq_default_title">
                            Will you review my artwork before printing my product?
                        </span>
                    </dt>
                    <dd class="faq_answer_default" style="display: block; overflow: hidden;">
                        <p>
                            No. Customsigncenter.com offers several ways for you to review your images and text and final proof prior to completing your order. You may include in your special instruction to have an element reviewed prior to print but this does not guarantee you a new proof prior to printing. If you are unsure about an image this is a good way to have it reviewed. If you have questions during your order process please feel free to call our Care Team during regular business hours at 614-300-4267. We stand ready to assist you.
                        </p>
                    </dd>
                    <span class="backtotop_default_ltr" style="display: inline;">
                        <a href="javascript:;" onclick="window.open('/index.php?option=com_faqftw&view=faq&tmpl=component&item=122&print=1','win2','status=no,toolbar=no,scrollbars=yes,titlebar=no,menubar=no,resizable=yes,width=640,height=480,directories=no,location=no'); return false;" style="text-decoration: none; background: none;">
                        </a>
                        <a href="#" style="text-decoration: none; background: none;">
                            <img alt="Back to top" src="https://customsigncenter.com/media/com_faqftw/images/back-to-top.png">
                            </img>
                        </a>
                    </span>
                </dl>
                <a name="2020-04-21-23-53-17">
                </a>
                <dl class="faq_default ltr">
                    <dt id="2020-04-21-23-53-17">
                        <div class="letter_a_ltr show" style="display: block;">
                        </div>
                        <div class="letter_q_ltr" style="left: 10px; right: 1090px;">
                        </div>
                        <span class="faq_default_title">
                            how do you log in
                        </span>
                    </dt>
                    <dd class="faq_answer_default" style="display: block; overflow: hidden;">
                        <p>
                            You can log in to your account by opening a product page. in the upper left corner of the design window will be a link to Sign in.  If you have a portal with Custom Sign Center please use the link in the footer titled My Account.
                        </p>
                    </dd>
                    <span class="backtotop_default_ltr" style="display: inline;">
                        <a href="javascript:;" onclick="window.open('index.php?option=com_faqftw&view=faq&tmpl=component&item=125&print=1','win2','status=no,toolbar=no,scrollbars=yes,titlebar=no,menubar=no,resizable=yes,width=640,height=480,directories=no,location=no'); return false;" style="text-decoration: none; background: none;">
                        </a>
                        <a href="#" style="text-decoration: none; background: none;">
                            <img alt="Back to top" src="https://customsigncenter.com/media/com_faqftw/images/back-to-top.png">
                            </img>
                        </a>
                    </span>
                </dl>
                <a name="what-if-i-don-t-see-the-school-my-child-attends-in-the-banner-section-for-graduation">
                </a>
                <dl class="faq_default ltr">
                    <dt id="what-if-i-don-t-see-the-school-my-child-attends-in-the-banner-section-for-graduation">
                        <div class="letter_a_ltr show" style="display: block;">
                        </div>
                        <div class="letter_q_ltr" style="left: 10px; right: 1090px;">
                        </div>
                        <span class="faq_default_title">
                            What if I don’t see the school my child attends in the banner section for graduation?
                        </span>
                    </dt>
                    <dd class="faq_answer_default" style="display: block; overflow: hidden;">
                        <p>
                            If you don't see your school on our site, please contact us at 614-300-4267. We can easily add a Deluxe (best) and/or Standard (good) banner template of your school once we acquire the school logo/mascot (Standard & Deluxe) and an image of the school (deluxe only) for the banner.
                        </p>
                    </dd>
                    <span class="backtotop_default_ltr" style="display: inline;">
                        <a href="javascript:;" onclick="window.open('/index.php?option=com_faqftw&view=faq&tmpl=component&item=128&print=1','win2','status=no,toolbar=no,scrollbars=yes,titlebar=no,menubar=no,resizable=yes,width=640,height=480,directories=no,location=no'); return false;" style="text-decoration: none; background: none;">
                        </a>
                        <a href="#" style="text-decoration: none; background: none;">
                            <img alt="Back to top" src="https://customsigncenter.com/media/com_faqftw/images/back-to-top.png">
                            </img>
                        </a>
                    </span>
                </dl>
                <a name="does-the-sign-come-with-steaks-for-the-ground">
                </a>
                <dl class="faq_default ltr">
                    <dt id="does-the-sign-come-with-steaks-for-the-ground">
                        <div class="letter_a_ltr show" style="display: block;">
                        </div>
                        <div class="letter_q_ltr" style="left: 10px; right: 1090px;">
                        </div>
                        <span class="faq_default_title">
                            Does the sign come with steaks for the ground?
                        </span>
                    </dt>
                    <dd class="faq_answer_default" style="display: block; overflow: hidden;">
                        <p>
                            While some of our coroplast real estate signs come with the stakes our
                            <a dir="ltr" href="/component/content/?Itemid=214&id=26&lang=en" hreflang="en-GB" lang="en-GB">
                                yard signs
                            </a>
                            are all sold separately from the
                            <a dir="ltr" href="/component/content/?Itemid=399&id=65&lang=en" hreflang="en-GB" lang="en-GB">
                                stakes
                            </a>
                            .
                        </p>
                    </dd>
                    <span class="backtotop_default_ltr" style="display: inline;">
                        <a href="javascript:;" onclick="window.open('index.php?option=com_faqftw&view=faq&tmpl=component&item=129&print=1','win2','status=no,toolbar=no,scrollbars=yes,titlebar=no,menubar=no,resizable=yes,width=640,height=480,directories=no,location=no'); return false;" style="text-decoration: none; background: none;">
                        </a>
                        <a href="#" style="text-decoration: none; background: none;">
                            <img alt="Back to top" src="https://customsigncenter.com/media/com_faqftw/images/back-to-top.png">
                            </img>
                        </a>
                    </span>
                </dl>  
@stop
