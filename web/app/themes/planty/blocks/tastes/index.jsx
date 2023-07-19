const { registerBlockType } = wp.blocks;
const { RichText, InspectorControls, MediaUpload, MediaUploadCheck } =
	wp.blockEditor;
const { ColorPicker, PanelBody, TextControl, Button } = wp.components;
const { __ } = wp.i18n;

registerBlockType("planty/tastes", {
	title: __("Tastes", "planty"),
	icon: "heart",
	category: "theme",
	edit({ className, attributes, setAttributes }) {
		const { nb, tastes } = attributes;
		const nb_tastes = typeof nb === "number" && nb > 0 ? nb : 1;

		const elements = [...Array(nb_tastes)].map((_, i) => {
			return (
				<div className="taste" key={i}>
					<MediaUploadCheck>
						<MediaUpload
							type="image"
							onSelect={(image) => {
								if (!tastes[i]) tastes[i] = {};
								const item = { ...tastes[i] };
								item.imageID = image.id;
								item.imageSrc = image.sizes.full.url;
								const items = [...tastes];
								items[i] = item;
								setAttributes({ tastes: items });
							}}
							render={({ open }) => {
								if (!tastes[i]) tastes[i] = {};
								const img = tastes[i].imageSrc || "";

								return (
									<Button
										onClick={open}
										className={
											img
												? "image-button existing"
												: "image-button button"
										}
									>
										{img ? (
											<img src={img} />
										) : (
											"Choisir une image"
										)}
									</Button>
								);
							}}
						/>
					</MediaUploadCheck>
                    <RichText
                        tagName="h3"
                        placeholder="Nom"
                        value={
                            typeof tastes[i] !== "undefined"
                                ? tastes[i].title
                                : ""
                        }
                        onChange={(title) => {
                            if (!tastes[i]) tastes[i] = {};
                            const item = { ...tastes[i] };
                            item.title = title;
                            const items = [...tastes];
                            items[i] = item;
                            setAttributes({ tastes: items });
                        }}
                    />
				</div>
			);
		});

		return (
			<div className={className}>
				<InspectorControls>
					<PanelBody title="Goûts" initialOpen={false}>
						<TextControl
							label="Nombre de goûts:"
							value={attributes.nb}
							onChange={(val) => {
								if (val === "") setAttributes({ nb: val });

								let nb = parseInt(val);
								if (nb !== NaN && nb > 0) {
									setAttributes({ nb });
								}
							}}
						/>
					</PanelBody>
				</InspectorControls>
				{elements}
			</div>
		)
	},
	save() {
		return null;
	},
});
