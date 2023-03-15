<?php
/**
 * Template part for displaying page content in page-cut-sheets.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package tindillelectric
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
	</header><!-- .entry-header -->

	<div class="entry-content">
	
		<?php //the_content(); ?>  
		<!-- we do not need the embedder here, just icons are enough -->

		<!-- 
			Removed ACF file type for better viewing. 
			With ACF, each cut sheet page will only display the link to view/download it.
			There will be another link to get directed to the website.

			Added a PDF Embedder instead to simply display the_content() as is, 
			and will embed to display it on the single cut sheet page itself.
			Note: If user wants to add a cut sheet in the future, the shortcode is pretty easy:

			[pdf-embedder url="https://example.com/attachment1.pdf"]

		-->
	<a href="<?php the_permalink(); ?>">	
		<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="168" height="168" viewBox="0 0 168 168">
			<image id="pdf" width="168" height="168" xlink:href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAfQAAAH0CAYAAADL1t+KAAAACXBIWXMAAA7EAAAOxAGVKw4bAAAAM3RFWHRDb21tZW50AHhyOmQ6REFGYWdPSGdtNzA6NCxqOjQ2OTQwNzkyNjkzLHQ6MjMwMjE0MDDVHBSXAAAFB2lUWHRYTUw6Y29tLmFkb2JlLnhtcAAAAAAAaHR0cDovL25zLmFkb2JlLmNvbS94YXAvMS4wLwA8eDp4bXBtZXRhIHhtbG5zOng9J2Fkb2JlOm5zOm1ldGEvJz4KICAgICAgICA8cmRmOlJERiB4bWxuczpyZGY9J2h0dHA6Ly93d3cudzMub3JnLzE5OTkvMDIvMjItcmRmLXN5bnRheC1ucyMnPgoKICAgICAgICA8cmRmOkRlc2NyaXB0aW9uIHJkZjphYm91dD0nJwogICAgICAgIHhtbG5zOmRjPSdodHRwOi8vcHVybC5vcmcvZGMvZWxlbWVudHMvMS4xLyc+CiAgICAgICAgPGRjOnRpdGxlPgogICAgICAgIDxyZGY6QWx0PgogICAgICAgIDxyZGY6bGkgeG1sOmxhbmc9J3gtZGVmYXVsdCc+VW50aXRsZWQgZGVzaWduIC0gMTwvcmRmOmxpPgogICAgICAgIDwvcmRmOkFsdD4KICAgICAgICA8L2RjOnRpdGxlPgogICAgICAgIDwvcmRmOkRlc2NyaXB0aW9uPgoKICAgICAgICA8cmRmOkRlc2NyaXB0aW9uIHJkZjphYm91dD0nJwogICAgICAgIHhtbG5zOkF0dHJpYj0naHR0cDovL25zLmF0dHJpYnV0aW9uLmNvbS9hZHMvMS4wLyc+CiAgICAgICAgPEF0dHJpYjpBZHM+CiAgICAgICAgPHJkZjpTZXE+CiAgICAgICAgPHJkZjpsaSByZGY6cGFyc2VUeXBlPSdSZXNvdXJjZSc+CiAgICAgICAgPEF0dHJpYjpDcmVhdGVkPjIwMjMtMDItMTQ8L0F0dHJpYjpDcmVhdGVkPgogICAgICAgIDxBdHRyaWI6RXh0SWQ+YmQzYWExOWItY2NjZS00ZWFlLWE3NzAtZmI3MDk3N2QwMDVmPC9BdHRyaWI6RXh0SWQ+CiAgICAgICAgPEF0dHJpYjpGYklkPjUyNTI2NTkxNDE3OTU4MDwvQXR0cmliOkZiSWQ+CiAgICAgICAgPEF0dHJpYjpUb3VjaFR5cGU+MjwvQXR0cmliOlRvdWNoVHlwZT4KICAgICAgICA8L3JkZjpsaT4KICAgICAgICA8L3JkZjpTZXE+CiAgICAgICAgPC9BdHRyaWI6QWRzPgogICAgICAgIDwvcmRmOkRlc2NyaXB0aW9uPgoKICAgICAgICA8cmRmOkRlc2NyaXB0aW9uIHJkZjphYm91dD0nJwogICAgICAgIHhtbG5zOnBkZj0naHR0cDovL25zLmFkb2JlLmNvbS9wZGYvMS4zLyc+CiAgICAgICAgPHBkZjpBdXRob3I+U2hhcm1haW5lIEplc20gU2FudG9zPC9wZGY6QXV0aG9yPgogICAgICAgIDwvcmRmOkRlc2NyaXB0aW9uPgoKICAgICAgICA8cmRmOkRlc2NyaXB0aW9uIHJkZjphYm91dD0nJwogICAgICAgIHhtbG5zOnhtcD0naHR0cDovL25zLmFkb2JlLmNvbS94YXAvMS4wLyc+CiAgICAgICAgPHhtcDpDcmVhdG9yVG9vbD5DYW52YTwveG1wOkNyZWF0b3JUb29sPgogICAgICAgIDwvcmRmOkRlc2NyaXB0aW9uPgogICAgICAgIDwvcmRmOlJERj4KICAgICAgICA8L3g6eG1wbWV0YT7T9ny/AAAdTElEQVR4nOzdL2wc2R3A8d9VC1zXJyWSDQysbcABGxxITwEHjBscVqlFBSk5cjjoKvVITzrW0jvaHk1RpRoccq9SgA0CLlaAwUZypHOdlWrJBVM3l3/27O7MvjfvfT7Sapygnyxtvnkzb2beu7i4uAjK8vww4sUkYjqJOD2KOD9r/v4//27+DFxvczdi+37qKaC1UeoBWNB0EnFyGPH8oDlOJ6kngjIc7zVHUWcgBH2ITo8inj4UcOibqDMggj4U00nzj8vxnojDMok6AyHouTs5iHjyTXME0hB1BkDQcyXkkBdRJ3OCnpuTg4jDPzutDjkSdTIm6LmYTiIefx0x2U89CXAVUSdTgp6Dp3+L+P4vL+8XB/Im6mRI0FOaTiIefeFhLzBEok5mBD2VyX7E4Z+symHIRJ2MCHoKj79uHgwDDJ+okwlBX6bzs4jvPnOKHUoj6mRA0JfF9XIom6iTmKAvw+lRszJ3vRzKJuok9JPUAxRPzKEux3vNhldYMkHvk5hDnUSdBN67uLi4SD1Ekc7PIr79RMyhZpu7Tr+zNFbofbjczS7mUDcrdZZI0Pvg1jTgkqizJILetcdfiTnwKlFnCQS9S5P95kUrAK8TdXom6F2ZTnxZgauJOj0S9K48+sImOOB6ok5PBL0LTx+6bg60J+r0QNAXdX4W8f1fU08BDI2o0zFBX9Tjr5xqB+Yj6nRI0BdxcvDyZQwA8xB1OiLoi3jyTeoJgBKIOh0Q9HmdHDQfgC6IOgsS9HlZnQNdE3UWIOjzsDoH+nK8F/Gv39tsy8y8PnUej/4Y8eyfqaeY3do4YrTa/Pz+OGL0s7TzwDIN7fbStXHE7Qcvv7NwDUGf1flZxN5vU0/Rztq4eR/zzZ3mZ6jZ33+VeoLZiTozGKUeYHCO/5F6gutt7kbcuhexspF6EmARp0fN65hFnRZcQ59Vzved39iO+PjLiO37Yg6luIy6a+pcQ9BnMZ3k+cz20WoT8dsPhBxKJOq0IOizyHF1vrLehHxzN/UkQJ9EnWsI+iwm+6kneNXaOOLO5za8QS1EnSsIelvnZ3mdbr9cmdsoA3URdd5B0NvK6UEyo9WIDz8Vc6iVqPMWgt7W84yCfuue0+xQO1HnNYLe1g+ZnG6/sR2xdTf1FEAORJ0fEfS2nh+mnqCxcz/1BEBORJ3/EfQ2ppPUEzQ2d91nDrxJ1AlBb+dFJkF3qh14F1GvnqC3kcPtaivrNsIBVxP1qgl6Gzmcct/4KPUEwBCIerUEvY0cdrivCzrQkqhXSdCH4uZO6gmAIRH16gj6EHgiHDAPUa+KoA+BzXDAvES9GoLehi8CMGSiXgVBbyOH29YAFiHqxRN0gFqIetEEHaAmol4sQQeojagXSdABaiTqxRF0gFqJelEEHaBmol4MQQeonagXQdABEPUCCDoADVEfNEEH4CVRHyxBB+BVoj5Igg7Am0R9cAQdgLcT9UERdADeTdQHQ9ABuJqoD4KgA3A9Uc+eoAPQjqhnTdABaE/UsyXoAMxG1LMk6ADMTtSzI+gAzEfUsyLoAMxP1LMh6AAsRtSzIOgALE7UkxN0ALoh6kkJOgDdEfVkBB2Abol6EoIOQPdEfekEHYB+iPpSCToA/RH1pRF0APol6ksh6AD0T9R7J+gALIeo90rQAVgeUe+NoAOwXKLeC0EHYPlEvXOCDkAaot4pQQcgHVHvjKADkJaod0LQAUhP1Bcm6ADkQdQXIugA5EPU5yboAORF1Oci6ADkR9RnJugA5EnUZyLoAORL1FsTdADyJuqtCDoA+RP1awk6AMNwehTx7SfNkTcIOgDDcX7WrNRF/Q2CDsCwiPpbCTpQh9Fq6gnokqi/QdCBOqyNU09A10T9FYIO1OGnG6knoA+i/n+CDtRhRdCLJeoRIehALW5sp56APom6oAOVeP/nqSegb5VHXdCBOoxWbYyrQcVRF3SgHjeddq9CpVEXdKAe6x+lnoBlqTDqgg7U4+ZOxMp66ilYlsqiLuhAXTas0qtSUdQFHajL1t3UE7BslURd0IG6rGxEbO6mnoJlqyDqgg7Uxyq9ToVHXdCB+qyNPTmuVgVHXdCBOu3cTz0BqRQadUEH6rSyEXHrXuopSKXAqAs6UK+tu+5Lr1lhURd0oF6j1YgPP009BSkVFHVBB+q2No744NeppyClQqIu6ABbdyPWf5F6ClIqIOqCDhARsfM7r1et3flZxGQ/9RRzE3SAiOZ6+u0Hos5gCTrAJVFnwAQd4MdEnYESdIDXXUbdRjkGRNAB3ubyHnW3tDEQgg5wla27EXf+4IlyZE/QAa6zNo6487lnv5M1QQdoY7TaBP3jL716lSyNUg8AMCgrG82GudOjiKcPI473Uk8EEWGFDjCftXHE9v1mxb71S9fYSc4KHWARKxsRH/ym+ZwcRDzbjzg5HPQzwRkmQQfoys2d5hPRPBf8hycRzw8jppOIF5PmOH2WdMTk1sbNfoS3OT1qfm/MRdAB+jBafTXwXO+7z5r/ADEX19ABoACCDgAFEHQAKICgA0ABBB0ACiDoAFAAQQeAAgg6ABRA0AGgAIIOAAUQdAAogKADQAEEHQAKIOgAUABBB4ACCDoAFEDQAaAAgg4ABRB0ACiAoANAAQQdAAog6ABQAEEHgAIIOgAUQNABoACCDgAF+C8AAAD//+zdT4icdxnA8Ued6ma7W5KSEULdboJE2EADtiuIhwiezMFTPAnt1Zx6aE8Ve9JzhF6MCFI8eGpAUGwVEbpC1Xa10Mhuq8XNNpVtndhdks1k20wTD2/GJG2SZmffd953nvl8YNhslvzeX95s9vu+77x/BB0AEhB0AEhA0AEgAUEHgAQEHQASEHQASEDQASABQQeABAQdABIQdABIQNABIAFBB4AEBB0AEhB0AEhA0AEgAUEHgAQEHQASEHQASEDQASABQQeABAQdABIQdABIQNABIAFBB4AEBB0AEhB0AEhA0AEgAUEHgAQEHQASEHQASEDQASABQQeABAQdABIQdABIQNABIAFBB4AEBB0AEhB0AEhA0AEgAUEHgAQEHQASEHQASEDQASABQQeABAQdABIQdABIQNABIAFBB4AEBB0AEhB0AEhA0AEgAUEHgAQEHQASEHQASEDQASABQQeABAQdABIQdABIQNABIAFBB4AEBB2AZmhN1j2DkSboADTD9P66ZzDSBB0AEhB0AEhA0AEgAUEHgAQEHQASEHQASEDQASABQQeABAQdABIQdABIQNABIAFBB4AEBB0AEhB0AEhA0AEgAUEHgAQEHQASEHQASEDQASABQQeABAQdABIQdABIoFX3BGrR60ZsLEdcOFN8vNSJ2OrUPavb21iO+MN36p4FUKeJdsSudsTuuYjp/cXH1mTds6JBxivo60sR7yxErC3UPROA7dm6tuOxvnT999rzEfu+HrH3kfrmRWOMR9A7ixErpyI2V+ueCUB5OovFa6IdcfDRIvCMrdxB73Ujlk8W3/AAWW11Ik6fiNhzKGLuu0XgGTt5T4rrLEa89LiYA+NjfSni5af83BtTOYO+tlBsrfa6dc8EYLh63eLnn3OFxk6+oK8tFIfZAcbZ8smIf/687lkwRLmCLuYA1519wZ76GMkT9M1VMQf4qOWTrvAZEzmC3utGvHai7lkANNNrzikaBzmCfvb5Zt/pDaBOW52IlefqngUVG/2gb3WKm8YAcHtnX7Djk9zoB13MAe6On5epjXbQe103UAC4W2sL3ktPbLSD3ln0zQmwHXaC0hrxoL9S9wwARsvai3XPgIqMdtA3luueAcBo8XMzrdEN+uaqw+0Ag7jxmeqkMbpBv3yx7hkAjKatc3XPgAqMbtAdNgIYjOvRUxrdoAMA/yfoAJCAoANAAoIOAAkIOgAkIOgAkICgA0ACgg4ACQg6ACQg6ACQgKADQAKCDgAJCDoAJCDoAJCAoANAAoIOAAkIOgAkIOgAkICgA0ACgg4ACQg6ACQg6ACQgKADQAKtuifAgFqTEVOz1389vf/61ybaERN7b/3n9hz65LG3OhGXOjd8fq74vYiI9aWIXjdic3WgaTfC1GyxziIipmcjWvfe+msfNb3/9l+L+Ph6i7h53fUuRlxYLT7fOjfw9Bvnxu/FbEb9e52xIuhNtnsuYle7CHQ/NJ8UlTJMXFvmrRw4dv3Xm6tFoDaWitA3IVL9uPTXVX/jZtcd/k5ludN6u5XN1YjLFyM2liMunCk+9rqVTa8yU7MRDz9d9yyqsb4U8eoP654F3BVBb6rdc83/ITk1W7z2HSk+3+pEdBYj1hbq26uZOXrzRkeT9fdqbzxqstWJWF8uNpI6i6MZeKAWgk55JtpFUGeOFmFaOSVK2zXRjtjXLjaS5qJYfxtLxUaS9QjcgaBTjYl2xNzxiIPdiLPPFy9B2r72fPE6+FgR9bPPe08XuCVBp1qtyeIQ+MzRiKUfR5z7a90zGl37jhSvzdWIfz1nXQI3cdkaw9GajDj8ZMRDT1R/Ul92U7PFuvzy94tzLQBC0Bm29nzE157Je5nTMO05VJw4aSMJCEGnDq3JIkT2LsvR30ja+0jdMwFqJOjUQ9TL5S0NGHuCTr0OP+nwe5na88WGknUKY0fQqVd/T91eZXn6d25z9APGiqBTv9Zkcc065elvKPXv4gekJ+g0Q3tefKowd9x6hTEh6DTHgWMOvVdh7rj31GEMuFPcuOk/DrLXLZ7wdTsT7eIJZcN8H7Z/L/iVU8Nb5iA+2Ih4fz2id+nWX/90K+LeB25+LGvdHn464m8/cNtYSEzQx8lLjw/2iNOp2euHxKt+BOnM0ebd9/2Nn0V01yIuvbu99ffZ+yLu/ULE1IPXPs5G3PfF6uZ5J63JiMNPRLz8VLPWLVAaQR8ngz6vfHO1eK2cKsJ+4Fh1h3Bbk8Uy1haqGX8Q//79YH/ug/MRH1x7VnzfPVMR9z8U0f5KxOe/Ws787lb/gTmnTwx3uYNYWyie2Fe3JswB7pKgsz2dxeJ14Fh1zx2fOdqsoJfp8mbEu38qXvc8G/HANyIe/FZEa9dwlt8/0tL09bv2YsTGct2zgJHipDgGs3IqYvlkNWNPzUZM7K1m7Ca5fD7izC+Lt0Le+vXwlnvwsfFYvzBmBJ3BrS1UF/X2fDXjbtfVD6tfRu9ixJu/iHjlexHdd6pfXmsy4sC3q18OMFSCzs6sLdz8HnFZdh8qf8xBfOozw1vWhTMRf34i4j9/qX5Z+47YS4dkBJ2dW/5J+WPuaUjQh7GH/lF/fybi7d9Vvxx354NUBJ2d2+oUJ8qVqTU5xjeZuRrxj2eLE8OqtOeQG85AIoJOOc6VHPQIsXn9pxHvna52GTNHqx0fGBpBpxxl76ETcfVKxOkfVXstdHt+jI+EQC6CTjmquPvY9JjvoUdEfLgV8dqJiCuXqxm/fyMfYOQJOuUp+2z3Jt0LvU6bqxFv/aa68R12hxQEHUbBW7+q7h7s43IjH0hO0OFOhnkd+p30usVDa6rSlMsEgYEJOuWZ3l/ueL2L5Y43iDquQ7+dt39b3XvpTbmRDzAwQac8ZZ8tfcGzu29yeTPi3ZeqGXvPEJ97D1RC0CnHuF8zPizv/LGacSfa/g1hxAk65aji0iePz/y4jderOznOiXEw0gSdcpQd9KqitV1NOSmu7+qViP++Ws3YZZ8DAdvlKNGOCDo7t/eR8v8jVvEEt0E06aS4vo03qhl3ol3NuHC33LVwRwSdnfvSY+WPuemEuNu6cKaacR1yh5Em6OzMwUer2bNryh560w65R0Scf7OacR1yh5HWqnsCjLB9R6q5bWiv25wT4pp4yD0i4v33Ij53f7ljNulw58NP17v8lVPFC0aIPXQGM/PNiLnj1YztyW2f7P336p4B0DD/AwAA///t3U9o2+cdx/FPUrlRZKW1GinEdJ7qDg/ktSGr047t4MJ2WLtBGbjsUGhPO2SHMWjOPeWyy3LYKYWdMtjNu3qnwnStnUMKEjQHR/jgbj+BPCxkrVPxDs9E7cSJJfn36Pnze78gJDTjly9Y89vP8/vHCh3jyZdNyG0+KvSrur1jx+I/HTvHzRX8ucMAwFgIOkZTrJrtddvvz+40/Dl/7rOv/23nuMWqP6c7AIyFoONkuYL55l5aNhGf1v2hrM5HwyoawGMIepb89K9SP5EOkm//W7dl4jB35FneM7NuHvDQaUi7BH0kPry4BoBXCHrW5CvHbzPz6bWZj/7meoIn+XjbmiR987XrCQB4hqvc4YedDT/Pnft629r5GdcTAPAMQYd73Rb3/I7LVtD7bTvHBWAdQYdbg57UuMtFXuN67nk7x+0np/9vAHiJoMOdQU+6f9vv57b7eg49N+t6AgCeIehwI4SYS/6eQ79w2fUEADzDVe6Yvn4iPbjjf8x9ZuPNaGy3A0Ej6JiuTkP64k4458x93XK/aOENdwcEHQgZQcd0DHrmSvadDdeTjMfHLfd8RXoun/5x2TEBgkbQYV+nITU/ZUs3LS+8aue4oeyaADgRQYc9nYZ5+puPD4wJ2Qvfs3Ncn75Ow0cSu8IPnwgQQUe6Bj3zPvOv6n4FIiZHn7ufJp9W6F/e461vwJgIOtLR3pKSz03MfQpDbGYu2dlyH/Q4hw4EjqBjMntNab8ltTdZiU/T5euSzqV/XL6GQPAIepYMtzBH2bI9umLbb5nXdXZb5s9ZOr/o221rV35k57h7BB0IHUHPkvu3XU8QHp9uW7vwknT5h3aOnWzZOS6AqeHRr0AoFn4hnbOw3d5PsrXrAkSKoAMhmClKL//MzrGTTTvHBTBVBB0IQfU96bkLdo69W7dzXABTRdCBZ/HhorgLJek7P7dz7H7C7WpAJAg68CzOL4o7J732e+n8jJ3Dh/ZsfQBPRdABn73ynvTi9+0dn6vbgWgQdMBXlbekxV/bO/5unavbgYgQdMBHL12TXvudndvUhrbX7R0bwNQRdMA3pdeka7fsXpDH6hyIDk+KA3xy+br9mEuszoEIEXTAB+efl159X1r4pd1tdsnEnNU5EB2CDjzLNO5DL69ISx9KF6/Y/7e6LVbnQKQIOuDK5etmVX7JwvvNn6Zxd3r/FoCpIujAs6T9YJlz56UrP5Ze+ZU0+3K6xz7N9jpPhQMiRtCBZ0ljy71YlV5ckl56XSr9QMoVzn7McSWbbLUDkSPowGkW18zvB/+ServSwT+l/+5/+/czl8yv518w58EL81Lxu9LFealw1c3MR3VbUpOtdiB2BB04zTDoIRr0pAd3zO8AosaDZYBYDXrS/dvcogZkBEEHYjSMORfBAZnBljsQm35ittmJOZApBB2ISachfcE5cyCLCDoQi+11bk0DMoygA6HrJ1LzU7M6B5BZBB0I1aAn7WyYX2yxA5lH0IEQ7dZ5axqAYwg6EJLduvRVne11AE8g6IDvhlvru3VW5ACeiqADvmpvScnnJuQAcAqCDvhi0DNvRdtrmN+50A3AGAg64MqgJ+01zfnwbovz4gDOhKAjLntNs0V9sWLeO16sup7I2GtKB4k5B95tSfstzocDSBVB99VeU/rsA9dThKfTOHmlW6xKM7Pmz/mylK8c//vS8tn+3WGsJfN7v23+vP8o/q1zPquAFwg6suG0F5XwyFQAgeP1qQAARICgAwAQAYIOAEAECDoAABEg6AAARICgAwAQAYIOAEAECDoAABEg6AAARICgAwAQAYIOAEAECDoAABEg6AAARICgAwAQAYIOAEAECDoAABEg6AAARICgAwAQgXCDPldzPQEAhKlYdT0BLAg36DOzricAgDDlCq4ngAXhBr1Y5UMJAJMoLbueABaEG3SJbXcAGFd5xfUEsCTsoFfedD0BAISF75vRCjvo86tsuwPAOCo3XE8AS8IOuiQtvOt6AgAIA4ugqMURdD6gAHC6xTXXE8Ci8IOeK7BKB4DTLK5J+YrrKWBR+EGXzAeVByUAwMnyZRY+GRBH0CVp+SZb7wBwkmu3+P6YAfEEvViVlj5yPQUA+KV2kx3MjIgn6JK5grN20/UUAOCH2k3zfRGZEFfQJaIOABIxz6Cc6wGsmF+VLlWlB3+U+m3X0wDA9OQK0usf87z2DIpvhT5UrEpv/YGfUAFkR3lF+smfiHlGxblCH8oVzLbT1VVpe13aa7qeCADSN1czt+8S8kyLO+hDpWXzq9uSdjakZFMa9FxPBQCTyxXMc9mvrhJySMpK0IeKVbNir8nEPdmU+ol0kJjAd1uuJwSAJxWrJuAXK+Zpb3M1Io4nZCvoRxWro9+b+dkHdmc5zVxNeuMTtzMAALwW70VxAABkCEEHACACBB0AgAgQdACAH2ZmXU8QNIIOAPADL5E5E4IOAEAECDoAABEg6AAARICgAwAQAYIOAEAECDoAABEg6AAARICgAwAQAYIOAEAECDoAABEg6AAARICgAwAQAYIOAEAECDoAABEg6AAARICgAwAQAYIOAEAECDoAABEg6KMoVl1PAADxG/RcTxA0gj6KXMH1BAAQv/1HricIGkEPQbflegIAyIaAF3AEPQRsQwHIgr2m6wmCPsVK0EPRabieAADs6ieuJwgaQR/FJQ9+Ymtvup4AAOzqeLBCDxhBH0W+4noCKdlyPQEA2NNt+bFCLy27nmBiBH0UPpxT6SdcHAcgXjsbricI+oI4iaCP5qIHK3TJjw88AKRt0JMSD04r+rB4OwOCPgofttwlabfux5YUAKRpZ8OPu3l8uF7qDAj6qOZqricwmp+6ngAA0tNPpO1111MYvizeJkTQR+XLT26dhlmpA0AMfFqkBHxBnETQRzfn0Rf64T0ukAMQvu11f56xkStwDj0zfPrJbdCTHtzx45wTAExit+7PVrvkz2nVMyDoo/Ltp7d+It2/TdQBhGe3LjXvup7iOJ8WbRMi6OOo3HA9wXHdlok62+8AQuFjzCX/vr9PgKCPY37V9QRPGkadC+UA+GzQMyH3MebFavBXuEtSzvUAQclXzBfetxXx8P8o7U1p6cMoPpgAIpJsSg//4u9zNHxcrE3g3OHh4aHrIYKys2E+mD6bX5UW1wg7ALfaW+Z7pi9Xsj/N6p+Df+yrRNDHN+hJ9d+4nmI0xao0/7ZUqvl1QR+AeLW3TMCTTX9X5EeVV6Rrt1xPkQq23MeVK5gPQDuAt591W+ae9aHhVZy+XbEPIFx7/3/l6UESRsAfN/+26wlSQ9AnsfBuGEF/3NFtLx9ehAAALuXLUVzdPsRV7pMoLUfxEAIAyLTF911PkCqCPqnFNdcTAAAmlS9Hc3X7EEGfFKt0AAhXZKtziaCfDat0AAhPhKtziaCfTWk5yg8FAEStdtP1BFYQ9LNa+iiKBxIAQCaUV6J4EctJCPpZ5QpsvQNACHIFafm3rqewhqCnYeFdHtQCAL5bXIt6R5Wgp+Xax1F/UAAgaOUVs/iKGEFPS74S7YUWABC0fDnqrfYhgp6myg1p4R3XUwAAjrp2KxM7qAQ9bUsfcT4dAHxRu5mZ78kE3YY3PsnMBwgAvDW/mqlnhRB0G3IFLpIDAJfmVzN3XRNBtyVfMSt1og4A01VeyVzMJYJuV7FK1AFgmorVTFzRfpJzh4eHh66HiF63Jd2/LQ16ricBgHhlcJv9KII+Lf1EenDHxB0AkK6Mx1wi6NM16JmVOlEHgPQsrvFODRF0Nx7ek3b+7noKAAhbrmBW5ZUbrifxAkF3JdmUmnc5rw4AkyhWze3B+YrrSbxB0F3ivDoAjG/hHfNUThxD0H2wsyFtr7NaB4BnKValpQ+l0rLrSbxE0H3RT6Qv70ntLdeTAIBfcgVz0Vvkrz89K4Lum07DnFvvt11PAgDuza+amHOu/FQE3VedhtmG32u6ngQApo+Qj42g+46wA8iKXMHcgkbIJ0LQQ9FPpN26tPsPtuMBxKW8IlXeNDHn3RcTI+gh6rbMlfGdBnEHEKa5mgl45Qar8ZQQ9ND1E6nTlPYaBB6Av4pVqVSTyje47cwSgh6jTsPc095tSfuPjt/fzrl4AGnLFUywhy5VpdysWYXPzB7/O1jzP7qCI9j/68VjAAAAAElFTkSuQmCC"/>
			</svg>
	</a>	

		<!-- <p class="">
			View / Download
			<a href="<?php // echo $file['url']; ?>">
				<?php // echo $file['filename']; ?>
			</a>
		</p> -->

			
			


	</div><!-- .entry-content -->

	<?php if ( get_edit_post_link() ) : ?>
		<footer class="entry-footer">
			<!-- <div class="cut-sheet-cat-single">
				<?php // the_terms( $post->ID, 'cut-sheet-category', 'Category: ', '/ ' ) ?> 
			</div> -->
			<?php
			edit_post_link(
				sprintf(
					wp_kses(
						/* translators: %s: Name of current post. Only visible to screen readers */
						__( 'Edit <span class="screen-reader-text">%s</span>', 'tindillelectric' ),
						array(
							'span' => array(
								'class' => array(),
							),
						)
					),
					wp_kses_post( get_the_title() )
				),
				'<span class="edit-link">',
				'</span>'
			);
			?>
		</footer><!-- .entry-footer -->
	<?php endif; ?>
</article><!-- #post-<?php the_ID(); ?> -->

