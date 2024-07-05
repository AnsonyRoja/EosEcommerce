if (document.querySelector('.price') !== null) {
    new AutoNumeric('.price', {
        currencySymbol : '',
        decimalCharacter : ',',
        digitGroupSeparator : '.',
    });
}

