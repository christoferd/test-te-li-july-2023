import './bootstrap';

const { Offcanvas, initTE } = await import("tw-elements");
initTE({ Offcanvas });

console.log('initTE', initTE);
console.log('Offcanvas', Offcanvas);

