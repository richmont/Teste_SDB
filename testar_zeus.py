from selenium import webdriver
#from selenium.common.exceptions import TimeoutException
#from selenium.webdriver.support.ui import WebDriverWait
#from selenium.webdriver.support import expected_conditions as EC
#from selenium.webdriver.common.keys import Keys

driver = webdriver.Firefox()


driver.get("https://richmont.github.io/Teste-SDB/")


'''
Com ajuda deste tutorial, com modificações:
#https://stackoverflow.com/questions/34396515/how-to-find-a-radio-button-element-by-value-using-selenium

'''

def TestarZeus():
    questao1 = driver.find_element_by_xpath("//input[@name='questao1' and @value='J']")
    questao1.click()

    questao2 = driver.find_element_by_xpath("//input[@name='questao2' and @value='D']")
    questao2.click()

    questao3 = driver.find_element_by_xpath("//input[@name='questao3' and @value='A']")
    questao3.click()

    questao4 = driver.find_element_by_xpath("//input[@name='questao4' and @value='J']")
    questao4.click()

    questao5 = driver.find_element_by_xpath("//input[@name='questao5' and @value='F']")
    questao5.click()

    questao6 = driver.find_element_by_xpath("//input[@name='questao6' and @value='C']")
    questao6.click()

    questao7 = driver.find_element_by_xpath("//input[@name='questao7' and @value='E']")
    questao7.click()

    questao8 = driver.find_element_by_xpath("//input[@name='questao8' and @value='B']")
    questao8.click()

    questao9 = driver.find_element_by_xpath("//input[@name='questao9' and @value='H']")
    questao9.click()

    questao10 = driver.find_element_by_xpath("//input[@name='questao10' and @value='I']")
    questao10.click()

    questao11 = driver.find_element_by_xpath("//input[@name='questao11' and @value='G']")
    questao11.click()


TestarZeus()
botao = driver.find_element_by_xpath("//input[@value='Terminar']")
botao.click()


#    driver.quit()
