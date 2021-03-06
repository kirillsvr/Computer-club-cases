const Roulette = (function () {
    function getRandomInt(min, max) {
        min = Math.ceil(min);
        max = Math.floor(max);
        return Math.floor(Math.random() * (max - min)) + min;
    }
    function a(a) {
        this.container.dispatchEvent(new CustomEvent(f, { detail: { prize: this.selectedPrize } })), (a = Math.abs(a));
        let b = Math.abs(+this.firstBlock.wrapper.style.marginLeft.replace("px", "")),
            c = this.acceleration,
            d = Math.sqrt(2 * c * a),
            e = 1e3 / this.fps,
            g = this.prizeWidth + this.spacing,
            h = 0,
            i = 0,
            k = !1,
            l = this.spacing + this.prizeWidth / 2,
            m = setInterval(() => {
                if (h > d / c) return void this.stop();
                let a = (b + (d * h - (c * h * h) / 2)) % this.width;
                if (Math.floor(a / g) != i) {
                    let a = this.firstBlock;
                    this.list.appendChild(a.wrapper), (a.wrapper.style.marginLeft = "0px"), (i = (i + 1) % this.prizes.length), (k = !1);
                }
                let f = a % g;
                (this.firstBlock.wrapper.style.marginLeft = `-${f}px`), f > l && !k && ((k = !0), this.playClick()), (h += e / 1e3);
            }, e);
        j.set(this, m);
    }
    function b() {
        throw h;
    }
    function c(a, b, c, d) {
        const e = this.prizeWidth + this.spacing;
        let f = this.selectedPrize,
            g = Math.round(b) * this.width;
        if (d) g *= -1;
        else {
            let b = f.index * e + (this.center - f.wrapper.offsetLeft),
                d = a.index * e + this.spacing + this.prizeWidth / 2;
            (g += d < b ? this.width - (b - d) : d - b), c && (g += 0.8 * (Math.random() * this.prizeWidth) - 0.4 * this.prizeWidth);
        }
        this.rotate(g);
    }
    function d(a, b, d, e) {
        let f = this.acceleration * b,
            g = (f * f) / (2 * this.acceleration),
            h = Math.ceil(g / this.width);
        c.bind(this)(a, h, d, e);
    }
    const e = "rotationStop",
        f = "rotationStart",
        g = "roulette__prize",
        h = "Not implemented",
        i = "Rotation is already active",
        j = new WeakMap();
    class k {
        constructor(a, b, c, d, e) {
            (this.index = b), (this.element = a);
            let f = document.createElement("li");
            f.classList.add(g), (f.style.marginRight = `${c}px`), (f.style.minWidth = `${d}px`), (f.style.minHeight = `${e}px`), f.appendChild(a), (this.wrapper = f);
        }
    }
    class l {
        constructor(a, b) {
            let { spacing: c = 10, acceleration: d = 350, fps: g = 40, audio: h = "public/sounds/click.wav", selector: i = ":scope > *", stopCallback: l = null, startCallback: m = null } = b || {},
                n = "string" == typeof a ? document.querySelector(a) : a instanceof HTMLElement ? a : a && a[0] instanceof HTMLElement ? a[0] : void 0;
            if (!n) throw "Container was undefined";
            n.classList.add("roulette");
            let o = document.createElement("ul");
            o.classList.add("roulette__list");
            let p = [...n.querySelectorAll(i)];
            if (!p.length) throw "Items not found";
            let q = p[0].parentElement,
                r = Math.max(...p.map((a) => a.clientWidth)),
                s = Math.max(...p.map((a) => a.clientHeight)),
                t = p.map((a, b) => new k(a, b, c, r, s));
            for (let c of t) o.appendChild(c.wrapper);
            (n.style.padding = `${c}px`), q.appendChild(o);
            let u = "string" == typeof h ? new Audio(h) : h && h.play ? h : null;
            u && !u.clone && (u.clone = u.cloneNode ? u.cloneNode : () => u),
                (this.container = n),
                (this.list = o),
                (this.prizes = t),
                (this.spacing = c),
                (this.acceleration = d),
                (this.width = (c + r) * t.length),
                (this.prizeWidth = r),
                (this.audio = u),
                (this.fps = g),
                j.set(this, -1),
            m && this.container.addEventListener(f, m),
            l && this.container.addEventListener(e, l);
        }
        rotate(c = 0) {
            if (this.rotates) throw i;
            0 < c ? a.bind(this)(c) : 0 > c && b.bind(this)(c);
        }
        rotateTo(a, b) {
            if (this.rotates) throw i;
            let e = +a,
                f = Number.isNaN(e) ? this.findPrize({ element: a }) : this.findPrize({ index: e });
            if (!f) throw "Prize not found";
            let { tracks: g = 0, time: h = 0, random: j = !0, backward: k = !1 } = b || {};
            (h |= 0), (g |= 0);
            (this.selectedPrize.index !== f.index || h || g) && (h ? d.bind(this)(f, h, j, k) : c.bind(this)(f, g, j, k));
        }
        playClick() {
            if (this.audio) {
                let a = this.audio.clone().play();
                a && a.catch && a.catch(() => {});
            }
        }
        findPrize(a) {
            let { index: b, element: c } = a || {};
            if (("number" != typeof b || Number.isNaN(b)) && !c) throw "Not enough arguments";
            return c ? this.prizes.find((a) => a.element === c) : this.prizes[b];
        }
        stop() {
            this.rotates && (clearInterval(j.get(this)), j.set(this, -1), this.container.dispatchEvent(new CustomEvent(e, { detail: { prize: this.selectedPrize } })));
        }
        get selectedPrize() {
            let a = this.prizes
                .concat()
                .sort((c, a) => c.wrapper.offsetLeft - a.wrapper.offsetLeft)
                .find((a) => a.wrapper.offsetLeft > this.center).index;
            return this.prizes[(this.prizes.length + a - 1) % this.prizes.length];
        }
        get firstBlock() {
            return this.findPrize({ element: this.list.querySelector(`:scope > .${g} > *`) });
        }
        get lastBlock() {
            let a = this.list.querySelectorAll(`:scope > .${g} > *`);
            return this.findPrize({ element: a[a.length - 1] });
        }
        get rotates() {
            return -1 < j.get(this);
        }
        get center() {
            return 11 + getRandomInt(-60, 60) + this.list.offsetLeft + this.list.clientWidth / 2;
        }
        static get version() {
            return "1.1.0";
        }
    }
    return l;
})();
