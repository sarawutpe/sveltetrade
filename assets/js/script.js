document.onreadystatechange = () => {
  var urlSearchParams = window.location.search

  if (document.readyState === 'interactive') {
    document.getElementById('portal-content').style.opacity = 1
    setTimeout(() => {
      document.getElementById('loader').style.visibility = 'hidden'
    }, 200)
  }

  if (document.readyState === 'complete') {
    // mobile toggle menu
    const portalMenu = document.querySelector('.portal-menu')
    const mobileMenuIcon = document.getElementById('mobile-menu-icon')
    const menuGroup = document.querySelector('.menu-group')

    if (mobileMenuIcon) {
      mobileMenuIcon.addEventListener('click', () => {
        const isMobile = portalMenu.classList.contains('active')
        if (isMobile) {
          portalMenu.classList.remove('active')
          setTimeout(() => {
            if (portalMenu.classList.contains('active')) return
            menuGroup.style.display = 'none'
          }, 400)
        } else {
          menuGroup.style.display = 'flex'
          portalMenu.classList.add('active')
        }
      })
    }

    window.matchMedia('(min-width: 600px)').onchange = function (event) {
      const portalMenu = document.querySelector('.portal-menu')
      const menuGroup = document.querySelector('.menu-group')
      menuGroup.style.display = 'flex'
      portalMenu.classList.remove('active')
    }

    if (urlSearchParams === '?a=login') {
      // keyboard elements
      const keyItem = document.querySelectorAll('.key')
      const letterItem = document.querySelectorAll('.letter')
      const deleteKey = document.getElementById('delete')
      const tabKey = document.getElementById('tab')
      const capsKey = document.getElementById('caps')
      const enter = document.getElementById('enter')
      const leftShiftKey = document.getElementById('l-shift')
      const rightShiftKey = document.getElementById('r-shift')
      const spaceKey = document.getElementById('space')

      // keyboard item click
      if (keyItem) {
        keyItem.forEach((e) => {
          e.addEventListener('mousedown', (e) => {
            e.preventDefault()
            initialFocus()
            const currentInput = document.activeElement
            if (e.target.innerText) {
              currentInput.value += e.target.innerText
            }
          })
        })
      }

      const username = document.getElementById('username')
      const password = document.getElementById('password')
      const validationNumber = document.getElementById('validation_number')

      function initialFocus() {
        if (
          username !== document.activeElement &&
          password !== document.activeElement &&
          validationNumber !== document.activeElement
        ) {
          return username.focus()
        }
        return true
      }

      // keyboard actions
      function keyboardAction(e, t) {
        e.preventDefault()
        if (t === 'd') {
          initialFocus()
          const currentInput = document.activeElement
          if (!currentInput.value) return
          if (currentInput.value) {
            const newInput = currentInput.value
            currentInput.value = newInput.substr(0, newInput.length - 1)
          }
        } else if (t === 't') {
          // tabs
          if (
            username !== document.activeElement &&
            password !== document.activeElement &&
            validationNumber !== document.activeElement
          ) {
            return username.focus()
          } else if (username === document.activeElement) {
            return password.focus()
          } else if (password === document.activeElement) {
            return validationNumber.focus()
          } else {
            return
          }
        } else if (t === 'c') {
          // caps
          if (letterItem.length > 0) {
            const a = letterItem[0].classList.contains('uppercase')
            if (a) {
              letterItem.forEach((e) => {
                e.classList.remove('uppercase')
              })
            } else {
              e.target.classList.add('active')
              letterItem.forEach((e) => {
                e.classList.add('uppercase')
              })
            }
          }
        } else if (t === 'e') {
          // enter
          if (!username.value || !password.value || !validationNumber.value) return
          document.getElementById('formRef').submit()
        } else if (t === 'ls' || t === 'rs') {
          // left shift and right shift
          keyItem.forEach((e) => {
            if (e.classList.contains('symbol')) {
              if (e.children[0].attributes[1].value === 'display: none;') {
                e.children[0].style.display = ''
                e.children[1].style.display = 'none'
              } else {
                e.children[0].style.display = 'none'
                e.children[1].style.display = 'block'
              }
            } else if (e.classList.contains('letter')) {
              if (e.classList.contains('uppercase')) {
                e.classList.remove('uppercase')
              } else {
                e.classList.add('uppercase')
              }
            }
          })
        } else if (t === 's') {
          // space
          initialFocus()
          const currentInput = document.activeElement
          currentInput.value += e.target.innerText
        } else {
          return
        }
      }

      // keyboard onclick
      if (deleteKey) {
        deleteKey.addEventListener('mousedown', (e) => keyboardAction(e, 'd'))
      }
      if (tabKey) {
        tabKey.addEventListener('mousedown', (e) => keyboardAction(e, 't'))
      }
      if (capsKey) {
        capsKey.addEventListener('mousedown', (e) => keyboardAction(e, 'c'))
      }
      if (enter) {
        enter.addEventListener('mousedown', (e) => keyboardAction(e, 'e'))
      }
      if (leftShiftKey) {
        leftShiftKey.addEventListener('mousedown', (e) => keyboardAction(e, 'ls'))
      }
      if (rightShiftKey) {
        rightShiftKey.addEventListener('mousedown', (e) => keyboardAction(e, 'rs'))
      }
      if (spaceKey) {
        spaceKey.addEventListener('mousedown', (e) => keyboardAction(e, 's'))
      }
    }

    if (urlSearchParams === '?a=deposit') {
      // deposit page
      const inputAmount = document.getElementById('input-amount')
      const calcDaily = document.getElementById('calc-daily')
      const calcWeekly = document.getElementById('calc-weekly')
      const calcMonthly = document.getElementById('calc-monthly')
      const calcYearly = document.getElementById('calc-yearly')
      // initial value
      let minAmount = 30
      let maxAmount = 100000
      let percent = 1
      // calc func
      function calcProfit(amount, minAmount, maxAmount, percent) {
        if (!amount || !inputAmount || !calcDaily || !calcWeekly || !calcMonthly || !calcYearly) return
        if (amount >= minAmount && amount <= maxAmount) {
          const calc = (amount / 100) * percent
          calcDaily.innerText = '$' + calc.toFixed(2)
          calcWeekly.innerText = '$' + (calc * 7).toFixed(2)
          calcMonthly.innerText = '$' + (calc * 30).toFixed(2)
          calcYearly.innerText = '$' + (calc * 365).toFixed(2)
        } else {
          calcDaily.innerText = 'NaN'
          calcWeekly.innerText = 'NaN'
          calcMonthly.innerText = 'NaN'
          calcYearly.innerText = 'NaN'
        }
      }
      // initial calc
      calcProfit(30, minAmount, maxAmount, percent)
      // input calc
      if (inputAmount) {
        inputAmount.addEventListener('input', (e) => {
          let amount = parseFloat(e.target.value)
          calcProfit(amount, minAmount, maxAmount, percent)
        })
      }
    }
  }
}
