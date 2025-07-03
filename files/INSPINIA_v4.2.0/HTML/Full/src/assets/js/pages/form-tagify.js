/**
 * Template Name: INSPINIA - Multipurpose Admin & Dashboard Template
 * By (Author): WebAppLayers
 * Module/App (File Name): Form Tagify
 * Version: 4.0.1
 */

class TagifyInitializer {

    constructor() {
        this.whitelist = ["A# .NET", "A# (Axiom)", "A-0 System", "A+", "A++", "ABAP", "ABC", "ABC ALGOL", "ABSET", "ABSYS", "ACC", "Accent", "Ace DASL", "ACL2", "Avicsoft", "ACT-III", "Action!", "ActionScript", "Ada", "Adenine", "Agda", "Agilent VEE", "Agora", "AIMMS", "Alef", "ALF", "ALGOL 58", "ALGOL 60", "ALGOL 68", "ALGOL W", "Alice", "Alma-0", "AmbientTalk", "Amiga E", "AMOS", "AMPL", "Apex (Salesforce.com)", "APL", "AppleScript", "Arc", "ARexx", "Argus", "AspectJ", "Assembly language", "ATS", "Ateji PX", "AutoHotkey", "Autocoder", "AutoIt", "AutoLISP / Visual LISP", "Averest", "AWK", "Axum", "Active Server Pages", "ASP.NET", "B", "Babbage", "Bash", "BASIC", "bc", "BCPL", "BeanShell", "Batch (Windows/Dos)", "Bertrand", "BETA", "Bigwig", "Bistro", "BitC", "BLISS", "Blockly", "BlooP", "Blue", "Boo", "Boomerang", "Bourne shell (including bash and ksh)", "BREW", "BPEL", "B", "C--", "C++ – ISO/IEC 14882", "C# – ISO/IEC 23270", "C/AL", "Caché ObjectScript", "C Shell", "Caml", "Cayenne", "CDuce", "Cecil", "Cesil", "Céu", "Ceylon", "CFEngine", "CFML", "Cg", "Ch", "Chapel", "Charity", "Charm", "Chef", "CHILL", "CHIP-8", "chomski", "ChucK", "CICS", "Cilk", "Citrine (programming language)", "CL (IBM)", "Claire", "Clarion", "Clean", "Clipper", "CLIPS", "CLIST", "Clojure", "CLU", "CMS-2", "COBOL – ISO/IEC 1989", "CobolScript – COBOL Scripting language", "Cobra", "CODE", "CoffeeScript", "ColdFusion", "COMAL", "Combined Programming Language (CPL)", "COMIT", "Common Intermediate Language (CIL)", "Common Lisp (also known as CL)", "COMPASS", "Component Pascal", "Constraint Handling Rules (CHR)", "COMTRAN", "Converge", "Cool", "Coq", "Coral 66", "Corn", "CorVision", "COWSEL", "CPL", "CPL", "Cryptol", "csh", "Csound", "CSP", "CUDA", "Curl", "Curry", "Cybil", "Cyclone", "Cython", "Java", "Javascript", "M2001", "M4", "M#", "Machine code", "MAD (Michigan Algorithm Decoder)", "MAD/I", "Magik", "Magma", "make", "Maple", "MAPPER now part of BIS", "MARK-IV now VISION:BUILDER", "Mary", "MASM Microsoft Assembly x86", "MATH-MATIC", "Mathematica", "MATLAB", "Maxima (see also Macsyma)", "Max (Max Msp – Graphical Programming Environment)", "Maya (MEL)", "MDL", "Mercury", "Mesa", "Metafont", "Microcode", "MicroScript", "MIIS", "Milk (programming language)", "MIMIC", "Mirah", "Miranda", "MIVA Script", "ML", "Model 204", "Modelica", "Modula", "Modula-2", "Modula-3", "Mohol", "MOO", "Mortran", "Mouse", "MPD", "Mathcad", "MSIL – deprecated name for CIL", "MSL", "MUMPS", "Mystic Programming L"]
    }

    initBasic() {
        const input = document.querySelector('#basicTagify');
        if (input) new Tagify(input);
    }

    initWhitelist() {
        const input = document.querySelector('#removeTagify');

        if (input) {
            const tagify = new Tagify(input, {
                enforceWhitelist: true,
                whitelist: input.value.trim().split(/\s*,\s*/)
            });

            const removeBtn = document.querySelector('.tags--removeAllBtn');
            if (removeBtn) {
                removeBtn.addEventListener('click', () => tagify.removeAllTags());
            }

            const fetchWhitelist = () =>
                new Promise(resolve => setTimeout(() => resolve(this.whitelist), 700));

            tagify.on('input', async e => {
                tagify.whitelist = null;
                tagify.loading(true);
                try {
                    const result = await fetchWhitelist();
                    tagify.settings.whitelist = result.concat(tagify.value);
                    tagify.loading(false).dropdown.show(e.detail.value);
                } catch {
                    tagify.dropdown.hide();
                }
            });
        }
    }

    initDropdown() {
        const input = document.querySelector('input[name="input-custom-dropdown"]');
        if (input) {
            new Tagify(input, {
                whitelist: this.whitelist,
                maxTags: 10,
                dropdown: {
                    maxItems: 20,
                    classname: 'tags-look',
                    enabled: 0,
                    closeOnSelect: false
                }
            });
        }
    }

    initEmail() {
        const input = document.querySelector('.customLook');
        const button = input?.nextElementSibling;
        if (!input || !button) return;

        const tagify = new Tagify(input, {
            editTags: {keepInvalid: false},
            pattern: /^[^\s@]+@[^\s@]+\.[^\s@]+$/,
            whitelist: Array.from({length: 20}, () => `user${Math.floor(Math.random() * 1000)}@mail.com`),
            dropdown: {
                position: 'text',
                enabled: 1
            }
        });

        button.addEventListener('click', () => tagify.addEmptyTag());
    }

    initAvatars() {
        const input = document.querySelector('input[name="extra-properties"]');
        if (input) {
            const users = [
                {
                    "value": 1,
                    "name": "Justinian Hattersley",
                    "avatar": "assets/images/users/user-1.jpg",
                    "email": "jhattersley0@ucsd.edu",
                    "team": "A"
                },
                {
                    "value": 2,
                    "name": "Antons Esson",
                    "avatar": "assets/images/users/user-2.jpg",
                    "email": "aesson1@ning.com",
                    "team": "B"
                },
                {
                    "value": 3,
                    "name": "Ardeen Batisse",
                    "avatar": "assets/images/users/user-3.jpg",
                    "email": "abatisse2@nih.gov",
                    "team": "A"
                },
                {
                    "value": 4,
                    "name": "Graeme Yellowley",
                    "avatar": "assets/images/users/user-4.jpg",
                    "email": "gyellowley3@behance.net",
                    "team": "C"
                },
                {
                    "value": 5,
                    "name": "Dido Wilford",
                    "avatar": "assets/images/users/user-5.jpg",
                    "email": "dwilford4@jugem.jp",
                    "team": "A"
                },
                {
                    "value": 6,
                    "name": "Celesta Orwin",
                    "avatar": "assets/images/users/user-6.jpg",
                    "email": "corwin5@meetup.com",
                    "team": "C"
                },
                {
                    "value": 7,
                    "name": "Sally Main",
                    "avatar": "assets/images/users/user-7.jpg",
                    "email": "smain6@techcrunch.com",
                    "team": "A"
                },
                {
                    "value": 8,
                    "name": "Grethel Haysman",
                    "avatar": "assets/images/users/user-8.jpg",
                    "email": "ghaysman7@mashable.com",
                    "team": "B"
                },
                {
                    "value": 9,
                    "name": "Marvin Mandrake",
                    "avatar": "assets/images/users/user-9.jpg",
                    "email": "mmandrake8@sourceforge.net",
                    "team": "B"
                },
                {
                    "value": 10,
                    "name": "Corrie Tidey",
                    "avatar": "assets/images/users/user-10.jpg",
                    "email": "ctidey9@youtube.com",
                    "team": "A"
                }
            ];

            const tagify = new Tagify(input, {
                tagTextProp: 'name',
                skipInvalid: true,
                dropdown: {
                    closeOnSelect: false,
                    enabled: 0,
                    classname: 'users-list',
                    searchKeys: ['name', 'email']
                },
                templates: {
                    tag: tagTemplate,
                    dropdownItem: suggestionItemTemplate,
                    dropdownHeader: dropdownHeaderTemplate
                },
                whitelist: users,
                transformTag(tagData) {
                    const {name, email} = parseFullValue(tagData.name);
                    tagData.name = name;
                    tagData.email = email || tagData.email;
                },
                validate({name, email}) {
                    if (!email && name) ({name, email} = parseFullValue(name));
                    if (!name) return "Missing name";
                    if (!validateEmail(email)) return "Invalid email";
                    return true;
                }
            });

            tagify.dropdown.createListHTML = suggestions => {
                const grouped = suggestions.reduce((acc, item) => {
                    const team = item.team || 'Unassigned';
                    (acc[team] ||= []).push(item);
                    return acc;
                }, {});

                return Object.entries(grouped).map(([team, members]) => `
            <div class="tagify__dropdown__itemsGroup" data-title="Team ${team}">
                ${members.map(m => tagify.settings.templates.dropdownItem.call(tagify, m)).join('')}
            </div>
        `).join('');
            };

            tagify.on('dropdown:select', onSelectSuggestion);
            tagify.on('edit:start', onEditStart);

            // Template for tag (in input)
            function tagTemplate(tagData) {
                return `
            <tag title="${tagData.email}" contenteditable="false" class="tagify__tag rounded-pill ${tagData.class || ''}" ${this.getAttributes(tagData)}>
                <x class="tagify__tag__removeBtn" role="button" aria-label="remove tag"></x>
                <div class="d-flex gap-2 align-item-center p-1">
                    <div class="avatar rounded-circle">
                        <img src="${tagData.avatar}" onerror="this.style.visibility='hidden'" class="avatar-xs">
                    </div>
                    <span class="tagify__tag-text align-middle tagify-user-tag-name fw-semibold">${tagData.name}</span>
                </div>
            </tag>`;
            }

            // Template for dropdown suggestion
            function suggestionItemTemplate(tagData) {
                return `
            <div ${this.getAttributes(tagData)} class="tagify__dropdown__item py-2 d-flex align-item-center gap-2 ${tagData.class || ''}" tabindex="0" role="option">
                ${tagData.avatar ? `
                    <div class="tagify__dropdown__item__avatar-wrap mb-0">
                        <img class="avatar-sm rounded-circle" src="${tagData.avatar}" onerror="this.style.visibility='hidden'">
                    </div>` : ''}
                <div>
                    <h5 class="mb-0">${tagData.name}</h5>
                    <span class="fs-base opacity-75">${tagData.email}</span>
                </div>
            </div>`;
            }

            // Dropdown header template
            function dropdownHeaderTemplate(suggestions) {
                return `
            <header class="d-flex justify-content-between px-3 py-2 gap-3 ${this.settings.classNames.dropdownItem} ${this.settings.classNames.dropdownItem}__addAll">
                <strong>${this.value.length ? 'Add Remaining' : 'Add All'} <span class="badge align-middle badge-soft-warning">${suggestions.length}</span> members</strong>
                <a class="remove-all-tags link-danger">Remove all</a>
            </header>`;
            }

            function onSelectSuggestion(e) {
                if (e.detail.event?.target?.matches('.remove-all-tags')) {
                    tagify.removeAllTags();
                } else if (e.detail.elm?.classList.contains(`${tagify.settings.classNames.dropdownItem}__addAll`)) {
                    tagify.dropdown.selectAll();
                }
            }

            function onEditStart({detail: {tag, data}}) {
                tagify.setTagTextNode(tag, `${data.name} <${data.email}>`);
            }

            function parseFullValue(value) {
                const parts = value.split(/<(.*?)>/g);
                return {
                    name: parts[0].trim(),
                    email: parts[1]?.replace(/<(.*?)>/g, '').trim()
                };
            }

            function validateEmail(email) {
                return /^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(email);
            }
        }

    }

    initDragSort() {
        const input = document.querySelector('input[name="drag-sort"]');
        if (input) {
            const tagify = new Tagify(input);
            new DragSort(tagify.DOM.scope, {
                selector: '.' + tagify.settings.classNames.tag,
                callbacks: {
                    dragEnd: () => tagify.updateValueByDOMTags()
                }
            });
        }
    }

    initVarious() {
        const outside = document.querySelector('input[name="tags-outside"]');
        if (outside) {
            new Tagify(outside, {
                whitelist: ['alpha', 'beta'],
                focusable: false,
                dropdown: {
                    position: 'input',
                    enabled: 0
                }
            });
        }

        const readonlyMix = document.querySelector('input[name="readonly-mix"]');
        if (readonlyMix) new Tagify(readonlyMix);

        const readonly = document.querySelector('input[readonly]');
        if (readonly) new Tagify(readonly);
    }

    initManualSuggestions() {
        const input = document.querySelector('input[name="tags-manual-suggestions"]');
        if (input) {
            const tagify = new Tagify(input, {
                whitelist: this.whitelist,
                enforceWhitelist: true,
                dropdown: {
                    position: "manual",
                    maxItems: Infinity,
                    enabled: 0,
                    classname: "customSuggestionsList"
                },
                templates: {
                    dropdownItemNoMatch() {
                        return "Nothing Found";
                    }
                }
            });

            tagify.dropdown.show();
            tagify.DOM.scope.parentNode.appendChild(tagify.DOM.dropdown);
        }
    }

    init() {
        this.initBasic();
        this.initWhitelist();
        this.initDropdown();
        this.initEmail();
        this.initAvatars();
        this.initDragSort();
        this.initVarious();
        this.initManualSuggestions();
    }
}

document.addEventListener('DOMContentLoaded', function () {
    new TagifyInitializer().init();
});
