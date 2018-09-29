from selenium import webdriver
#from selenium.common.exceptions import TimeoutException
#from selenium.webdriver.support.ui import WebDriverWait
#from selenium.webdriver.support import expected_conditions as EC
#from selenium.webdriver.common.keys import Keys

driver = webdriver.Firefox()


#driver.get("http://richmito.hol.es/index.php")
driver.get("http://localhost/Teste-SDB/index.php")


'''
Com ajuda deste tutorial, com modificações:
#https://stackoverflow.com/questions/34396515/how-to-find-a-radio-button-element-by-value-using-selenium

'''

def TestarZeus():
    questao1 = driver.find_element_by_xpath("//input[@name='questao1' and @value='10']")
    questao1.click()

    questao2 = driver.find_element_by_xpath("//input[@name='questao2' and @value='4']")
    questao2.click()

    questao3 = driver.find_element_by_xpath("//input[@name='questao3' and @value='1']")
    questao3.click()

    questao4 = driver.find_element_by_xpath("//input[@name='questao4' and @value='10']")
    questao4.click()

    questao5 = driver.find_element_by_xpath("//input[@name='questao5' and @value='6']")
    questao5.click()

    questao6 = driver.find_element_by_xpath("//input[@name='questao6' and @value='3']")
    questao6.click()

    questao7 = driver.find_element_by_xpath("//input[@name='questao7' and @value='5']")
    questao7.click()

    questao8 = driver.find_element_by_xpath("//input[@name='questao8' and @value='2']")
    questao8.click()

    questao9 = driver.find_element_by_xpath("//input[@name='questao9' and @value='8']")
    questao9.click()

    questao10 = driver.find_element_by_xpath("//input[@name='questao10' and @value='9']")
    questao10.click()

    questao11 = driver.find_element_by_xpath("//input[@name='questao11' and @value='7']")
    questao11.click()


TestarZeus()
botao = driver.find_element_by_xpath("//input[@value='Terminar']")
botao.click()


#driver.quit()
